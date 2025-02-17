require_once 'path/to/src/Razorpay.php';

use Razorpay\Api\Api;

// Initialize Razorpay
$api = new Api('your_api_key', 'your_api_secret');

// Create an order
$order = $api->order->create([
    'receipt' => 'order_rcptid_11',
    'amount' => 50000, // Amount in paise (50000 paise = ₹500)
    'currency' => 'INR',
]);