<?php
/**
 * Created by PhpStorm.
 * User: Nimesha
 * Date: 8/20/2017
 * Time: 11:15 AM
 */

class Desktop{
    private $pro_id;
    private $cat;
    private $brand;
    private $model;
    private $processor;
    private $m_board;
    private $ram;
    private $hdd;
    private $gui;
    private $op_drive;
    private $monitor_des;
    private $pw_supply;
    private $mouse;
    private $key_bd;
    private $sounds;
    private $price;
    private $dis_price;
    private $availability;
    private $warranty;
    private $pri_image;
    private $img1;
    private $img2;
    private $img3;
    private $img5;
    private $img4;
    private $add_date;
    private $up_date;
    private $os;
    private $frm_factor;

    function set_itm($pr_id)
    {
        // connect to database
        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con, 'pclifeonline');
        $sql = 'SELECT * FROM tb_desktop WHERE pro_id="' . $pr_id . '"';
        //echo $sql;
        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($result);

        //setting variables
        $this->pro_id= $row['pro_id'];
        $this->cat= $row['cat'];
        $this->brand= $row['brand'];
        $this->model= $row['model'];
        $this->processor= $row['processor'];
        $this->m_board= $row['m_board'];
        $this->ram= $row['ram'];
         $this->hdd= $row['hdd'];
         $this->gui= $row['gui'];
         $this->op_drive= $row['op_drive'];
         $this->monitor_des= $row['monitor_des'];
         $this->pw_supply= $row['pw_supply'];
         $this->mouse= $row['mouse'];
         $this->key_bd= $row['key_bd'];
         $this->sounds= $row['sounds'];
         $this->price= $row['price'];
         $this->dis_price= $row['dis_price'];
         $this->availability= $row['availability'];
         $this->warranty= $row['warranty'];
         $this->pri_image= $row['pri_image'];
         $this->img1= $row['img1'];
         $this->img2= $row['img2'];
         $this->img3= $row['img3'];
         $this->img4= $row['img4'];
         $this->add_date= $row['add_date'];
         $this->up_date= $row['up_date'];
         $this->os= $row['os'];
         $this->frm_factor= $row['frm_factor'];

    }

    function echo_itm(){
        echo '<div class="col-sm-12" style="margin: 5px;padding: 25px; height:auto; box-shadow: black 0px 0px 2px; background-color: rgba(255,255,255,0.5); border-radius: 2px; text-align: center">';
        echo '
        <script type="text/javascript">
               function changeImage(imgr){
                   document.getElementById("imageReplace").src=imgr;
               }
        </script>
            
        <div class="col-sm-6">
                    <table border="0" >
                    <tr>
                    <td width="400px" height="400px" colspan="5"><img id="imageReplace" src="' . $this->pri_image . ' " width="400px" height="400px"></td>
                    
        </tr>
        <tr><td width="80px" height="80px"><img src="' . $this->pri_image . ' " onclick= "changeImage(\'' . $this->pri_image . '\')" width="80px" height="80px"></td>
        <td width="80px" height="80px"><img src="' . $this->img1 . ' " onclick= "changeImage(\'' . $this->img1 . '\')" width="80px" height="80px"></a></td>
        <td width="80px" height="80px"><img src="' . $this->img2 . ' " onclick= "changeImage(\'' . $this->img2 . '\')" width="80px" height="80px"></td>
        <td width="80px" height="80px"><img src="' . $this->img3 . ' " onclick= "changeImage(\'' . $this->img3 . '\')" width="80px" height="80px"></td>
        <td width="80px" height="80px"><img src="' . $this->img4 . ' " onclick= "changeImage(\'' . $this->img4 . '\')" width="80px" height="80px"></td>
        </tr>
        </table>
        </div>
        <br>
        <div class="col-sm-6">
        <table style="text-align:left">
        <tr><td><h2>' . $this->brand . ' - ' . $this->model . '   (' . $this->pro_id . ')</h2></td></tr>
        
        <tr><td><h3>' . $this->cat . '</h3></td></tr>
        <tr><td><h4>' . $this->processor . '</h3></td></tr>
        <tr><td><h4>' . $this->ram . '</h3></td></tr>
        <tr><td><h4>' . $this->hdd . '</h3></td></tr>
        
        <tr><td style="color:red"><h4> Rs.' . $this->price . '.00</h3></td></tr>
        <tr><td style="color:blue"><h4>' . $this->availability . '</h3></td></tr>
        
        </table>
        <table>
        <tr>
        <td> 

        </td>
        <td> ';


        echo '
        </td>
        </tr>
        </table>
        
        </div>
        <br>
        <div class="col-sm-12">
        <table class="table table-striped" style="font-weight: bold;"><b>
            
            <tbody>
            <tr>
                <td>Form Factor:</td>
                <td>' . $this->frm_factor . '</td>
                
              </tr>
              <tr>
                <td>Mother Board Details:</td>
                <td>' . $this->m_board . '</td>
                
              </tr>
              <tr>
                <td>Graphic Driver:</td>
                <td>' . $this->gui . '</td>
                
              </tr>
              <tr>
                <td>Optical Driver:</td>
                <td>' . $this->op_drive . '</td>
                
              </tr>
              <tr>
                <td>Power Supply:</td>
                <td>' . $this->pw_supply . '</td>
                
              </tr>
              <tr>
                <td>Mouse Type:</td>
                <td>' . $this->mouse . '</td>
                
              </tr>
              <tr>
                <td>Key Board Type:</td>
                <td>' . $this->key_bd . '</td>
                
              </tr>
              <tr>
                <td>Sound System:</td>
                <td>' . $this->sounds . '</td>
                
              </tr>
              <tr>
                <td>Discounted Price:</td>
                <td>Rs.' . $this->dis_price . '.00</td>
                
              </tr>
              <tr>
                <td>Operating system:</td>
                <td>' . $this->os . '</td>
                
              </tr>
              <tr>
                <td>Warranty:</td>
                <td>' . $this->warranty . ' Months</td>
                
              </tr>
              <tr>
                <td>Added Date:</td>
                <td>' . $this->add_date . '</td>
                
              </tr>
              <tr>
                <td>Last Updated Date:</td>
                <td>' . $this->up_date . '</td>
                
              </tr>
              </b>
            </tbody>
            
          </table>
          </div>
                    ';


    }


}