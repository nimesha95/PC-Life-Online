<?php
include 'header.inc.php';
if(isset($_GET['id'])){
    if($_GET['id']=='products'){
        include 'Products/index.php';
    }

}
else {
    if(isset($_SESSION['username'])){
        echo ' <div class="col-sm-6">';

                        echo '
                <div class="thumbproduct">
                    <table> <tr> <td rowspan="4">
                            </td><td><h4> Recent Sales</h4></td></tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        
                    </table>
                
                </div>
           
            </div>';
        echo ' <div class="col-sm-6">';

        echo '
                <div class="thumbproduct">
                    <table> <tr> <td rowspan="4">
                            </td><td><h4> Recent Orders</h4></td></tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        
                    </table>
                
                </div>
           
            </div>';
        echo ' <div class="col-sm-6">';

        echo '
                <div class="thumbproduct">
                    <table> <tr> <td rowspan="4">
                            </td><td><h4> Recent Pre Orders</h4></td></tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        
                    </table>
                
                </div>
           
            </div>';
        echo ' <div class="col-sm-6">';

        echo '
                <div class="thumbproduct">
                    <table> <tr> <td rowspan="4">
                            </td><td><h4> Recent Sales</h4></td></tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        
                    </table>
                
                </div>
           
            </div>';
        echo ' <div class="col-sm-6">';

        echo '
                <div class="thumbproduct">
                    <table> <tr> <td rowspan="4">
                            </td><td><h4> Recent Sales</h4></td></tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        
                    </table>
                
                </div>
           
            </div>';
        echo ' <div class="col-sm-6">';

        echo '
                <div class="thumbproduct">
                    <table> <tr> <td rowspan="4">
                            </td><td><h4> Recent Sales</h4></td></tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        <tr>
                            <td><b></b></td>
                        </tr>
                        
                    </table>
                
                </div>
           
            </div>';
    }

}
?>