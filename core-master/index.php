<?php

// require 'flight/Flight.php';
require 'flight/autoload.php';
//require 'hey.php';



Flight::route('/', function () {
    // Include the library
    include 'Sparrow.php';

    // Declare the class instance
    $db = new Sparrow;

    // Select a table
    $db->from('user');

    // Build a select query
    $db->select();

    // Display the SQL
    echo $db->sql();


    //echo 'hello world! HOME';
});

function mi_funcionklk()
{
    echo "soy la funcion";
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>Testing POO</h1>
        <?php

        class Fruit
        {
            // Properties
            public $name;
            public $color;
            public $size;

            // Methods
            public function set_name($name)
            {
                $this->name = $name;
            }
            public function get_name()
            {
                return $this->name;
            }
        }

        $apple = new Fruit();
        $banana = new Fruit();
        $apple->set_name('test1');
        $banana->set_name('TEST2');

        echo $apple->get_name();
        echo "<br>";
        echo $banana->get_name();
        ?>

    </body>

    </html>
<?php
}
#FORMULARIO
function formulario()
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <h1>klk manito entraste al formulario</h1>


    <body>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <!--scrips -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    </html>
<?php
}
function ruuta()
{
    //Guarda tu variable  
    Flight::set('id', 123);

    //En otro lugar de tu aplicacion
    $id = Flight::get('id');
}

Flight::route('/formulario', 'formulario');

Flight::route('/funcion', 'mi_funcionklk');

//Flight::route('/hey','hey');



Flight::start();


//mi_funcionklk();
#Request For Enhancement QA--check again entry exit criteria