<?php

class TicketDePago {
    public $nombre;
    public $numeroTarjeta;
    public $fechaPago;
    public $monto;
    public $igv;
    public $subtotal;
    public $total;

    public function __construct($nombre, $numeroTarjeta, $monto, $tasaIGV) {
        $this->nombre = $nombre;
        $this->numeroTarjeta = $numeroTarjeta;
        $this->fechaPago = date('Y-m-d');
        $this->monto = $monto;  // Aquí se establece el precio según el plan
        $this->igv = $this->calcularIGV($this->monto, $tasaIGV);
        $this->subtotal = $this->monto;
        $this->total = $this->subtotal + $this->igv;
    }

    private function calcularIGV($monto, $tasaIGV) {
        return $monto * $tasaIGV / 100;
    }


    public function generarTicket() {
    return "
        <style>
            .ticket-container {
                font-family: Arial, sans-serif;
                background-color: #f8f9fa;
                border: 1px solid #ddd;
                padding: 10px;
                max-width: 320px;
                margin: auto;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                box-sizing: border-box;
            }
            .ticket-header img {
                width: 100px;
                display: block;
                margin: 0 auto 5px;
            }
            .ticket-header h1, .ticket-header h2 {
                text-align: center;
                color: #333;
                font-size: 14px;
            }
            .right-aligned, .financials {
                text-align: right;
                width: 100%;
            }
            .financials p {
                margin: 0;
                padding-right: 20px;
            }
            @media screen {
                .ticket-container { width: 100%; max-width: 600px; }
            }
            @media print {
                .print-button { display: none; }
                body { margin: 0; }
                .ticket-container { width: auto; }
                .right-aligned, .financials { text-align: right; }
            }
            .print-button {
                display: block;
                width: auto;
                padding: 10px 20px;
                margin: 10px auto 20px;
                background-color: #808080; 
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                text-align: center;
                font-size: 16px;
            }
            
        </style>
        
        <div class='ticket-container'>
            <div class='ticket-header'>
                <img src='images/l1.png' alt='Logo GYM'>
                <h1>AMAZING GYM</h1>
                <h2>Recibo de Servicios</h2>
            </div>
            <hr>
            <p><strong>Fecha:</strong> {$this->fechaPago}</p>
            <p><strong>Nombre:</strong><br>{$this->nombre}</p>
            <p><strong>Número de Tarjeta:</strong><br>{$this->numeroTarjeta}</p>
            <div class='financials'>
                <p><strong>Subtotal:</strong> S/.{$this->subtotal}</p>
                <p><strong>IGV:</strong> S/.{$this->igv}</p>
                <p><strong>Total:</strong> S/.{$this->total}</p>
            </div>
            <p style='text-align: justify; font-weight: bold;'>INDICACIONES:</p>
            <p style='text-align: justify;'>Este comprobante de servicios es necesario para acceder al gimnasio. Asegúrate de llevar contigo una copia física o virtual del mismo para completar tu matrícula de manera correcta y sin inconvenientes..</p>
            <button onclick='printTicket();' class='print-button'>Imprimir</button>
        </div>
        <script>
            function printTicket() {
                document.querySelector('.print-button').style.display = 'none';
                window.print();
                setTimeout(() => {
                    document.querySelector('.print-button').style.display = 'block';
                }, 500);
            }
        </script>
    ";
}


     public static function procesarFormulario() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $numeroTarjeta = $_POST['numeroTarjeta'];
            $monto = $_POST['monto'];  // Se obtiene el monto desde el formulario
            $tasaIGV = 0;

            $ticket = new TicketDePago($nombre, $numeroTarjeta, $monto, $tasaIGV);
            echo $ticket->generarTicket();
        }
    }
}

TicketDePago::procesarFormulario();

?>
