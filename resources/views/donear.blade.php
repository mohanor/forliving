
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .div-svg {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div>
        <div class="div-svg">
            <svg width="150" height="150" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" fill-rule="evenodd"><path d="m256 0c-141.2 0-256 114.8-256 256s114.8 256 256 256 256-114.8 256-256-114.8-256-256-256z" fill="#4bae4f" data-original="#4bae4f" class=""></path><path d="m379.8 169.7c6.2 6.2 6.2 16.4 0 22.6l-150 150c-3.1 3.1-7.2 4.7-11.3 4.7s-8.2-1.6-11.3-4.7l-75-75c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0l63.7 63.7 138.7-138.7c6.2-6.3 16.4-6.3 22.6 0z" fill="#ffffff" data-original="#ffffff" class=""></path></g></g></svg>
        </div>
        <h1>شكرا لطلبك</h1>
        <a href="{{ route('products.indexar')}}">اذهب إلى الصفحة الرئيسية</a>
    </div>
</body>
</html>