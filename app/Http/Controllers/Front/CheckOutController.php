<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Utilities\Constant;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Utilities\VNPay;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    private  $orderService;
    private  $orderDetailService;

    public function __construct(
        OrderServiceInterface $orderService,
        OrderDetailServiceInterface $orderDetailService)
    {
        $this -> orderService=$orderService;
        $this-> orderDetailService=$orderDetailService;

    }

    public function index(){
        $carts =Cart::content();
        $total=Cart::total();
        $subtotal=Cart::subtotal();
        return view('front.checkout.index', compact('carts','total','subtotal'));
    }
    public function  addOrder(Request $request){
            //them don hang
            $data=$request->all();
            $data['status']=Constant::order_status_ReceiveOrders;
            $order= $this->orderService->create($data);

            //2.them chi tiet dh
            $carts =Cart::content();

            foreach($carts as $cart){
                $data = [
                    'order_id'=>$order->id ,
                    'product_id'=>$cart ->id,
                    'qty'=>$cart ->qty,
                    'amount'=>$cart ->price,
                    'total'=> $cart->qty * $cart ->price ,
                ];

                $this->orderDetailService->create($data);
            }
            if($request->payment_type == 'pay_later'){

            //3. gui mail
            $total=Cart::total();
            $subtotal=Cart::subtotal();
            $this->sendEmail($order,$total,$subtotal);  //goi ham gui mail da dinh nghia
           // 4.xoa gio hang
                Cart::destroy();


            //5. tra vef kq

                return redirect('checkout/result')
                -> with('notification','Đặt hàng thành công! Bạn vui lòng thanh toán khi nhận hàng. Chi tiết bạn vui lòng kiểm tra Mail.');
            }
            if($request->payment_type == 'online_payment')
            {
                //1 lay url tt paypvn
                    $data_url =VNPay::vnpay_create_payment([
                    'vnp_TxnRef'=>$order->id, //id dh
                    'vnp_OrderInfo'=>'Mổ tả về đơn hàng ở đây..',
                    'vnp_Amount'=>Cart::total(0,'','')*22400, //nhan chuyen san vnd

                    ]);
                    //2 chuyeen huong to url lay dc
                return redirect()->to($data_url);
                }
            }

    public function vnPayCheck(Request $request){
        //lay data tu url.do vnpay gui qua $vnp_returnurl
        $vnp_ResponseCode =$request->get('vnp_ResponseCode'); //ma phan hoi kq thanh toan.00=thanhcong
        $vnp_TxnRef =$request->get('vnp_TxnRef');             //ticket_id
        $vnp_Amount =$request->get('vnp_Amount');             //so tien thanh toan

        //2 kiem tra kq gd tra tu vnpay
        if($vnp_ResponseCode !=null){
            //neu thanh cong
            if($vnp_ResponseCode == 00) {
            //cap nhat trnag thai order
                $this->orderService->update(['status'=>Constant::order_status_Paid], $vnp_TxnRef);
            //gui mail
                $order=$this->orderService->find($vnp_TxnRef);  //$vnp_txnRef chinh la order_id
                $total =Cart::total();
                $subtotal=Cart::subtotal();
                $this->sendEmail($order, $total, $subtotal);
                //xoa gio hang
//                Cart::destroy($order);
                Cart::destroy();
                //tb kq
                return redirect('checkout/result')
                    -> with('notification','Đặt hàng thành công! Bạn vui lòng thanh toán khi nhận hàng. Chi tiết bạn vui lòng kiểm tra Mail.');

            }else {
                //neu that bai
                $this->orderService->delete($vnp_TxnRef);
                //xoa don hang them vao database vaf tra ve tb loi
                return redirect('checkout/result')
                    -> with('notification','Đặt hàng That bai.');

            }
        }
    }

    public function result(){
    $notification = session('notification');
    return view ('front.checkout.result', compact('notification'));
    }

    public function sendEmail($order,$total,$subtotal){
        $email_to = $order->email;

        Mail::send('front.checkout.email',
            compact('order','total','subtotal'),
            function($message) use ($email_to){
            $message-> from('quanghoangson2.3@gmail.com','QUẢNG HOÀNG SƠN');
            $message->to($email_to, $email_to);
            $message->subject('THÔNG BÁO ĐƠN HÀNG ĐÃ ĐƯỢC ĐẶT HÀNG!');
        });
    }
}
