<?php
require ("./Classes/conexion.php");

class CrudsRepuestos extends Conexion{

    public function __construct(){
          parent::__construct();
        }
    public function InicioTrans(){
        /* Metodo que habilita transacción manual*/
        $ttion = $this->conn->begin_transaction();
        ;
        return $ttion;
        }
    public function OKTrans(){
        /* Metodo que commitea los cruds efectuados*/
        $ok = $this->conn->commit();
        return $ok;
        }
    public function ErrTrans(){
        /* Metodo que vuelve el proceso de cruds a cero */
        $er = $this->conn->rollback();
        return $er;
            }    
    public function Ejecutar($sql){
        /* Metodo que ejecuta un query sql
        Retorna un resultado si es un SELECT*/
        $result = $this->conn->query($sql);
        return $result;
        }
    public function CantFilasAfectadas(){
        /* Metodo que retorna la cantidad de filas
         afectadas con el ultimo query realizado.*/
         return $this->conn->affected_rows;
        }
          
        public function ObtenerFilas($result){
        /*Metodo que retorna la ultima fila
         de un resultado en forma de arreglo.*/
         return $result->fetch_row();
        }
          
        public function LimpiarResultado($result){
        //Metodo que libera el resultado del query.
         $result->free_result();
        }
        public function CerrarConexion(){
            //Metodo que cierra la conexion a la BD
             $this->conn->close();
            }
}

?>