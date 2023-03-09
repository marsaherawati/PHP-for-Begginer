How to Choose A First Programming Language
Dalam Memilih bahasa pemrograman harus sesuai dengan tujuan kita. Apabila kita ingin membuat situs web, kita bisa belajar bahasa pemrograman seperti HTML, CSS, dan JS. Jika kita ingin membuat aplikasi desktop, kita mungkin bisa memilih bahasa seperti Python, C++, atau Java. Jika kita benar benar baru dalam pemrograman, cobalah memilih bahasa yang lebih mudah seperti Python atau Ruby. Setelah itu kita bisa mempertimbangkan jenis proyek yang kita ingin kerjakan di masa depan, jika kita ingin menjadi seorang pengembang Game, kita bisa memilih bahasa C++ atau C#, dan apa bila kita ingin fokus pada pengembangan Web, kita bisa memilih bahasa JavaScript atau PHP.
PHP For Beginners, Ep 2 - Tools of the Trade
1.	Text Editor. Dalam pengembangan web, text editor digunakan untuk menulis kode program. Ada banyak pilihan text editor gratis dan berbayar yang tersedia, seperti Visual Studio Code dan Sublime Text.
2.	Terminal. Terminal adalah alat yang digunakan untuk mengeksekusi perintah pada sistem operasi. Dalam pengembangan web dengan PHP, terminal digunakan untuk menjalankan perintah seperti menjalankan server web lokal atau menginstal paket PHP.
3.	PHP. PHP harus diinstal di server untuk dapat menjalankan aplikasi web PHP. PHP menyediakan banyak fungsi dan fitur untuk memproses data dan menghasilkan konten dinamis pada website.
4.	Local Development Environment. Saat membangun situs web, seringkali lebih mudah untuk membangun dan menguji di lingkungan lokal. Ada beberapa alat yang tersedia untuk membuat lingkungan pengembangan lokal, seperti XAMPP, MAMP, atau WAMP.
5.	Browser. Browser digunakan untuk menampilkan halaman web yang dihasilkan oleh aplikasi web PHP. Beberapa pilihan browser yang populer antara lain Google Chrome, Mozilla Firefox, dan Microsoft Edge.Browser: Browser digunakan untuk menampilkan halaman web yang dihasilkan oleh aplikasi web PHP. Beberapa pilihan browser yang populer antara lain Google Chrome, Mozilla Firefox, dan Microsoft Edge.
6.	Version Control. Version control digunakan untuk melacak perubahan pada kode program dan bekerja sama dengan tim. Salah satu platform version control yang populer adalah Git dan tersedia beberapa hosting Git seperti GitHub, GitLab, Bitbucket.
PHP For Beginners, Ep 3 - Your First PHP Tag
Yang pertama kita membuat dan menyimpan direktori dimanapun yang kamu mau sebelum membuat website. Membuat direktori hanya memerintahkan menggunakan mkdir. Pertama akan membuat index.html yang isi programnya adalah

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
</head>
<body>
    <h1>Hello Word</h1>
</body>
</html>

Lalu jalankan dengan menggunakan apache/xampp untuk melihat web. Tag diatas adalah h1. Jika file nama diubah namun di browser kita masih menjalankan nama file lama maka akan terjadi error. Lalu mengubah file diatas dengan nama index.php namun belum ditambahkan dengan program php maka akan terjadi eror juga, maka program dapat diubah sebagai berikut
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
</head>
<body>
    <h1>
        <?php 
        echo "Hello Word";
        ?>
    </h1>
</body>
</html>

Html disebut juga web dinamis karena dimana penggunanya tidak dapat berinteraksi langsung sedangkan php disebut juga web statis dimanapengguna dapat berinteraksi langsung

PHP For Beginners, Ep 4 - Variables

Berisi bagaimana dapat menggabungkan hal-hal atau concatenate akan menjadi istilah yang tepat. Menggabungkan menggunakan tanda (+) adalah penggunaan penggabungan operator yang salah, biasanya pada php menggunakan tanda (.) untuk menggabungkan seperti berikut
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
</head>
<body>
    <h1>
        <?php 
        echo "Hello" . "Word";
        ?>
    </h1>
</body>
</html>

Bisa diganti kata word dengan lainnya seperti everybody di bawah ini
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
</head>
<body>
    <h1>
        <?php 
        echo "Hello" . " " . "Everybody";
        ?>
    </h1>
</body>
</html>

Kita akan membuat variabel yang pertama yang itu menggunakan symbol ($) atau yang disebut dollar lalu dilanjutkan dengan nama variabel seperti greeting karena ingin menyapa dan dapat diisikan dengan “Hello” sehingga pada codingan kita dapat mengganti kata “Hello” dengan nama variabel yang kita buat
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
</head>
<body>
    <h1>
        <?php 
        $greeting = "Hello";
        echo $greeting . "Everybody";
        ?>
    </h1>
</body>
</html>

Atau lebih mudahnya kita dapat menggabungkan nama variabel kita dan everybody dalam satu tanda petik dua jadi tidak perlu menggunakan operator penggabungan berupa (.) titik. Hal ini disebut sebagai refactoring itu adalah ketika kita men-tweak kode tanpa benar-benar mengubah hasil akhir
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
</head>
<body>
    <h1>
        <?php 
        $greeting = "Hello";
        echo "$greeting Everybody!";
        ?>
    </h1>
</body>
</html>

Di dalam menulis code kita tidak boleh menggunakan tanda kutip karena akan terjadi eror yaitu tulisan hello everybody! tidak akan muncul pada browser anda, maka dari itu harus menggunakan tanda kutip ganda agar semua dapat berfungsi.
PHP For Beginners, Ep 5 - Conditionals and Booleans

Yang pertama menulis manual yaitu You have read “dark matter.” Lalu kita mengedit css menggunakan inspect pada browser, kita mengedit pada bagian body dengan menambahkan display, place-items, height, margin dan font-family. Jika sudah kitab isa mengcopy codingannya dan memasukkan pada file index.php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <h1>You have read "Dark Matter".</h1>
</body>
</html>

Selanjutnya adalah menambahkan codingan yaitu apakah pengguna sudah membaca buku dark matter apa belum. Kita akan menambahkan variabel $read dimana jika sudah membaca maka akan diberi kata true seperti berikut
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $name = "Dark Matter";
        $read = true;

        if($read){
            $message = "You have read $name";
        }
    ?>
    <h1><?php echo $message; ?></h1>
</body>
</html>

Dan bagaimana pernyataan jika belum membaca maka ditulis dengan false seperti berikut
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $name = "Dark Matter";
        $read = false;

        if($read){
            $message = "You have read $name";
        }
    ?>
    <h1><?php echo $message; ?></h1>
</body>
</html>

Maka akan terjadi eror. Solusi agar tidak terjadi eror adalah dengan menambahkan else seperti berikut
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $name = "Dark Matter";
        $read = false;

        if($read){
            $message = "You have read $name";
        }else{
            $message = "You have not read $name";
        }
    ?>
    <h1><?php echo $message; ?></h1>
</body>
</html>

Jika kita mengubah $read menjadi true maka akan keluar lagi output yaitu “You have read Dark Matter”.
PHP For Beginners, Ep 6 - Arrays

Selanjutnya adalah membuat web tentang rekomendasi beberapa buku menggunakan array. Dalam tag kita membuat variabel dengan nama $books yang berisi 3 rekomendasi buku. Lalu kita menggunakan php untuk memanggil rekomendasi buku tersebut seperti ini
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>
    <?php 
    $books = [
        "Do Androids Dream of Eletric Sheep",
        "The langoliers",
        "Hail Mary"
    ]
    ?>
    <ul>
        <?php foreach ($books as $book){
            echo "<li>" . $book . "</li>";
        } 
        ?>
    </ul>
</body>
</html>

Atau dapat ditulis juga lebih mudah seperti ini
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>
    <?php 
    $books = [
        "Do Androids Dream of Eletric Sheep",
        "The langoliers",
        "Hail Mary"
    ]
    ?>
    <ul>
        <?php foreach ($books as $book){
            echo "<li>$book</li>";
        } 
        ?>
    </ul>
</body>
</html>

PHP For Beginners, Ep 7 - Associative Arrays

Cara memanggil array adalah dengan menggunakan codingan sebagai berikut
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Demo</title>
</head>
<body>
    <?php 
    $books = [
        "Do Androids Dream of Eletric Sheep",
        "The langoliers",
        "Project Hail Mary"
    ]
    ?>
    <p>
        <?= $books[2] ?>
    </p>
</body>
</html>

Menggunakan array asosiatif adalah larik yang memiliki key dan value, seperti berikut
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

    <?php 

        $books = [
            [
                'name' => 'Do Android Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://example.com'
            ]
        ]
    ?>

    <ul>

        <?php foreach($books as $book) : ?>

            <li>
                <a href="<?= $book['purchaseUrl'] ?>"><?=$book['name'] ?></a>
            </li>
        <?php endforeach ?>

    </ul>

</body>
</html>

PHP For Beginners, Ep 8 - Functions and Filtering

Berikut fungsi yang dihunakan untuk memfilter hasil sehingga output yang di keluarkan sesuai dengan pemanggilan. Operasi if diatas menggunakan tanda === karena untuk membandingkan nilai. Sedangkan jika hanya ada tanda = maka dia akan mengubah variabel yang sudah ada
        function filterByAuthor ($books, $author) {

            $filteredBooks = [];

            foreach ($books as $book){
                if($book['author']===$author){
                    $filteredBooks[] = $book;
                }
            }

            return $filteredBooks;
        }

Pemanggilan function seperti berikut
<ul>

        <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaserYear'] ?>) - By <?= $book['author'] ?>  
            </a>

        </li>

PHP For Beginners, Ep 9 - Lambda Functions

Di dalam fungsi lambda, $filteredBooks adalah nama variabel yang digunakan untuk menampung fungsi lambda.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

    <?php 

        $books = [
            [
                'name' => 'Do Android Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
        ];

        //fungsi filter
        function filter($items, $fn){
            $filteredItems = [];

            foreach ($items as $item){
                if($fn($item)){
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

        // fungsi filter
        // $filteredBooks = filter($books, function ($book){
        //     return $book['releaseYear'] < 2000;
        // })

        // fungsi lambda
        $filteredBooks = array_filter($books, function ($book){
            return $book['author'] === 'Andy Weir';
        })

    ?>
    

    <ul>

        <?php foreach ($filteredBooks as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>  
            </a>

        </li>

        <?php endforeach; ?>

    </ul>

</body>
</html>

PHP For Beginners, Ep 10 - Separate PHP Logic From the Template

Pemisahan logika dari halaman yang utama yang berisi template/html dengan membuat file baru bisa menggunakan nama file apa saja, disini akan menggunakan nama file index.view php sebagai berikut
<?php include "Episode-10.index.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

    <ul>

        <?php foreach ($filteredBooks as $book) : ?>
        
        <li>
            <a href="<?= $book['purchaseUrl'] ?>">
                <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>  
            </a>

        </li>

        <?php endforeach; ?>

    </ul>

</body>
</html>

Maka pada bagian index.php akan menjadi seperti ini
<?php 

$books = [
    [
        'name' => 'Do Android Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'releaseYear' => 2021,
        'purchaseUrl' => 'http://example.com'
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'purchaseUrl' => 'http://example.com'
    ],
];

$filteredBooks = array_filter($books, function ($book){
    return $book['author'] === 'Andy Weir';
});

// require "index.php";

?>


"# PHP-for-Begginer" 
