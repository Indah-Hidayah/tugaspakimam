@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare</title>
    <script src="{{asset('assets/bootstrap-5.3.2-dist/bootstrap/css/bootstrap.min.css')}}"></script>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: rgb(255, 255, 255);
            color: #000000;
        }

        header {
            background-color: rgb(255, 255, 255);
            color: rgb(39, 20, 23);
            padding: 15px 0;
            text-align: center;
        }

        header h1 {
            margin-bottom: 10px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav ul li a {
            color: rgb(39, 20, 23);
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .hero {
            /* background-image: image(assets/foto/skintificproduk.jpg); */
            background-size: ;
            background-position: center;
            color: rgb(39, 20, 23);
            text-align: center;
            padding: 10px 10px;
        }
        .hero img {
            max-width: 100%;
            height: 100px;
            display:flex;

        }
        .hero h2 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .hero a {
            background-color: rgb(255, 255, 255);
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }

        .hero a:hover {
            /* background-color: pink; */

        }

        .products {
            padding: 10px 10px;
            text-align: center;
        }

        .products h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .product-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .product {
            background-color: #fff;
            margin: 15px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(33.333% - 60px);
            height: 600px;
        }

        .product img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .product h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .product p {
            margin-bottom: 15px;
        }

        .product a {
            display: inline-block;
            background-color: rgb(131, 55, 127);
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        /* .product a:hover {
            background-color: rgb(255, 255, 255);
        } */

        .about {
            background-color: rgb(255, 255, 255);
            padding: 10px 10px;
            text-align: center;
        }

        .about h2 {
            font-size: 36px;
            margin-bottom: 30px;
            margin-top: 10px;
        }

        .about p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 18px;
        }


        footer {
            background-color: rgb(255, 255, 255);
            color: #000000;
            text-align: center;
            padding: 10px 0;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 768px) {
            .product {
                width: calc(50% - 40px);
            }

            .hero h2 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .product {
                width: calc(100% - 30px);
                height: 50px;
            }

            .hero h2 {
                font-size: 28px;
            }

            .hero p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <section class="hero" id="home">
        <img style="margin-left: 40%;" src="{{asset('assets/foto/logo2.png')}}" alt="">
    </section>
    <header>
        <nav>
            <ul>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Tentang Kami</a></li>
            </ul>
        </nav>
    </header>


    <section class="products" id="">
        <h2>Shop Our Products</h2>
        <div class="product-list">
            @foreach ($produk as $item)

            <div class="product">
                <img src="{{asset('assets/foto/'.$item->foto)}}" alt="">
                <h3>{{ $item->name}}</h3>
                <h3>{{ $item->deskripsi}}</h3>
                <p>Rp. {{ $item->harga }}</p>
                <a href="/user/shop/{{$item->id}}">Shop Now</a>
            </div>
            @endforeach
        </div>
    </section>

    <section class="about" id="">
        <a href="/about"></a>
        <h2>About Us</h2>
        <p>𝗘𝘃𝗲𝗿𝘆𝗼𝗻𝗲 𝗱𝗲𝘀𝗲𝗿𝘃𝗲 𝗵𝗲𝗮𝗹𝘁𝗵𝗶𝗲𝗿 𝘀𝗸𝗶𝗻, 𝗶𝗻𝘀𝗶𝗱𝗲 𝗮𝗻𝗱 𝗼𝘂𝘁𝘀𝗶𝗱𝗲. 𝖭𝗈𝗍 𝗈𝗇𝗅𝗒 𝖺𝖻𝗈𝗎𝗍 𝖿𝖺𝗌𝗍 𝖾𝖿𝖿𝖾𝖼𝗍𝗂𝗏𝖾 𝗋𝖾𝗌𝗎𝗅𝗍𝗌, 𝗐𝖾 𝖺𝗅𝗌𝗈 𝗉𝗋𝗂𝗈𝗋𝗂𝗍𝗂𝗓𝖾 𝗍𝗁𝖾 𝗌𝖺𝖿𝖾𝗍𝗒 𝗈𝖿 𝗒𝗈𝗎𝗋 𝗌𝗄𝗂𝗇 𝗂𝗇 𝗍𝗁𝖾 𝗅𝗈𝗇𝗀 𝗋𝗎𝗇, 𝗇𝗈 𝗆𝗈𝗋𝖾 𝖼𝗈𝗆𝗉𝗋𝗈𝗆𝗂𝗌𝗂𝗇𝗀 𝗍𝗁𝖾 𝗁𝖾𝖺𝗅𝗍𝗁 𝗈𝖿 𝗒𝗈𝗎𝗋 𝗌𝗄𝗂𝗇 𝖻𝖺𝗋𝗋𝗂𝖾𝗋, 𝖲𝗄𝗂𝗇𝗍𝗂𝖿𝗂𝖿𝗂𝖼 𝗐𝗂𝗅𝗅 𝗀𝗂𝗏𝖾𝗌 𝗒𝗈𝗎 𝗍𝗁𝖾 𝖻𝖾𝗌𝗍 𝗌𝗈𝗅𝗎𝗍𝗂𝗈𝗇 𝗈𝖿 𝖺𝗅𝗅. 𝖮𝗎𝗋 𝗋𝖾𝗌𝖾𝖺𝗋𝖼𝗁 𝗍𝖾𝖺𝗆 𝗌𝗉𝖾𝗇𝖽 𝗒𝖾𝖺𝗋𝗌 𝗌𝗍𝗎𝖽𝗒𝗂𝗇𝗀 𝖺𝗇𝖽 𝖽𝖾𝗏𝖾𝗅𝗈𝗉𝗂𝗇𝗀 𝖺 𝗌𝗈𝗅𝗎𝗍𝗂𝗈𝗇 𝗂𝗇 𝖺 𝖻𝗈𝗍𝗍𝗅𝖾. 𝖶𝖾 𝖻𝖺𝗌𝖾𝖽 𝖺𝗅𝗅 𝗈𝗎𝗋 𝖿𝗈𝗋𝗆𝗎𝗅𝖺𝗍𝗂𝗈𝗇 𝗈𝗇 𝖳𝖳𝖤 𝗍𝖾𝖼𝗁𝗇𝗈𝗅𝗈𝗀𝗒 (𝖳𝗋𝗂𝗅𝗈𝗀𝗒 𝖳𝗋𝗂𝖺𝗇𝗀𝗅𝖾 𝖤𝖿𝖿𝖾𝖼𝗍) 𝗍𝗁𝖺𝗍 𝗇𝗈𝗍 𝗈𝗇𝗅𝗒 𝗀𝗂𝗏𝖾 𝗒𝗈𝗎 𝖾𝖿𝖿𝖾𝖼𝗍𝗂𝗏𝖾 𝗉𝗋𝖾𝖼𝗂𝗌𝖾 𝗋𝖾𝗌𝗎𝗅𝗍𝗌, 𝖻𝗎𝗍 𝖺𝗅𝗌𝗈 𝗌𝖺𝖿𝖾 𝖺𝗇𝖽 𝗀𝖾𝗇𝗍𝗅𝖾 𝖾𝗏𝖾𝗇 𝖿𝗈𝗋 𝗉𝖾𝗈𝗉𝗅𝖾 𝗐𝗂𝗍𝗁 𝗌𝖾𝗇𝗌𝗂𝗍𝗂𝗏𝖾 𝗌𝗄𝗂𝗇.</p>
    </section>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary" style="margin-left:50%;background-color: #ffffffd1; color:rgb(0, 0, 0); height:30px;">Logout</button>
    </form>
    <footer>
        <p>&copy; 2024 Skincare . </p>
    </footer>
</body>
</html>
<script src="{{asset('assets/bootstrap-5.3.2-dist/bootstrap/js/bootstrap.min.js')}}"></script>
