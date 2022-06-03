<?php
class Nofication{
    public $msg;
    function __construct($msg){
        $this->msg = $msg;
    }
    function __destruct() {
        // echo "The fruit is {$this->name}.";
        echo "<script type='text/javascript'>alert('{$this->name}');</script>";
      }
}
//To send pop up msg to user
function Notify($message)
{
  echo "<SCRIPT>
        alert('$message');
    </SCRIPT>";
}
//To redirect user after the msg
function RedirectAfterMsg($message, $location)
{
  Notify($message);
  echo "<SCRIPT>window.location = '$location';</SCRIPT>";
}
?>