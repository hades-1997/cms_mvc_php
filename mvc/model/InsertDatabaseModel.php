<?php
class InsertDatabaseModel extends Database
{
    public function InsertDatabase($username,$password,$email)
    {
        $qr = "INSERT INTO username VALUES(null,'$username','$password','$email')";
        $result = false;
        if(mysqli_query($this->con, $qr))
        {
            $result = true;
        }
        return json_encode($result);
    }
   public function checkUsername($un)
   {
       $qr="SELECT id FROM email
           WHERE username='$un'";
       $rows = mysqli_query($this->con, $qr);
       $kq = false;
       if(mysqli_num_rows($rows)>0)
       {
           $kq = true;
       }
       return json_encode($kq);
   }
}
