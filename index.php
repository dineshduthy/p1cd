<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Hosting Company</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f4f4; }
        .header { background: #333; color: white; text-align: center; padding: 20px; }
        .container { max-width: 800px; margin: auto; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .plans { display: flex; justify-content: space-between; margin-top: 20px; }
        .plan { background: #ddd; padding: 15px; text-align: center; border-radius: 5px; width: 30%; }
        .order-btn { display: inline-block; background: green; color: white; padding: 10px; margin-top: 10px; text-decoration: none; border-radius: 5px; }
        .contact-form { margin-top: 20px; }
        input, textarea { width: 100%; padding: 8px; margin-top: 5px; }
        button { background: blue; color: white; padding: 10px; border: none; cursor: pointer; margin-top: 10px; }
    </style>
</head>
<body>

<div class="header">
    <h1>Welcome to Our Web Hosting Service</h1>
</div>

<div class="container">
    <h2>Hosting Plans</h2>
    <div class="plans">
        <div class="plan">
            <h3>Basic Plan</h3>
            <p>$5/month</p>
            <a href="order.php?plan=Basic" class="order-btn">Order Now</a>
        </div>
        <div class="plan">
            <h3>Pro Plan</h3>
            <p>$10/month</p>
            <a href="order.php?plan=Pro" class="order-btn">Order Now</a>
        </div>
        <div class="plan">
            <h3>Premium Plan</h3>
            <p>$20/month</p>
            <a href="order.php?plan=Premium" class="order-btn">Order Now</a>
        </div>
    </div>

    <h2>Contact Us</h2>
    <form class="contact-form" action="contact
