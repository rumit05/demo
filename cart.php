<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    

   
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>cart</title>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/foodhut.css">
    <link rel="stylesheet" href="assets/css/cart.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row" id="cart-container">
        <div class="col-md-3 cart-left"></div>
        <div class="col-sm-6 col-md-6 col-xs-12 my-2 cart-main cart-middle">

                    <!-- crt header -->
                  
                  <div class="container-fluid text-c" id="cart-head">
                    <div class="row d-flex cart-head">
                      <div class="col-4">
                        <h5>Product</h5>
                      </div>
                      <div class="col-4">
                        <h5>Quantity</h5>
                      </div>
                      <div class="col-4">
                        <h5>Price</h5>
                      </div>
                    </div>
                  </div> 
                   
                   <!-- cart-product  -->

                   <?php 
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $database = "eatery";
                        
                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $database);
                        
                          // Check connection
                          if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                          }
                    if(isset($_SESSION['cart'])){
                      $arcol = count($_SESSION['cart']);
                      if($arcol > 0){
                        // echo "<h5 class='text-center'>Add</h5>";
                        // echo $arcol;
                        foreach($_SESSION['cart'] as $key => $value){

                          $pro_no = $value['no'];
                        
                          $qr = "select * from products  where product_no = '$pro_no'";
                          $result = mysqli_query($conn,$qr);
                          $prd = mysqli_fetch_assoc($result);
                          $product_img = $prd['product_img'];
                          $product_qty = $value['qty'];
                          $product_price = $prd['product_price']; 
                          $q = 0;


                        
                        // if(isset($_POST["submit"])){
                        //   $_SESSION['product_no'] = $_POST['product_no'];
                        //   $_SESSION['qty'] = $_POST['qty'];
                        //   // echo $_POST['product_no'];
                        //   // echo $_SESSION['qty'];
                        //   // header("location:../../index.php#Menu");
                        // } 
                        

                  ?>
                  
                  <div class="container-fluid">
                    <div class="row d-flex cart-head">
                      <div class="col-4 cart-prd">
                        <img class="prd-img" src="assets/uploads/<?php echo $product_img?>" alt="hey">
                        <div class="prd-desc">
                          <h6>Burger</h6>
                          <span>Price:</span>
                          <p id="pr"> <?php echo $product_price ?> /-</p>
                          <form action="assets/php/qty_session.php" method="post">
                            <input type="hidden" name="no" value="<?php echo $value['no']; ?>">
                            <button name="remove">Remove</button>
                          </form>
                          
                        </div>
                        
                      </div>
                      <div class="col-4">
                        <!-- <h5></h5> -->
                        <div class="textbox text-l">
                          <input class="text-box"  id="qty<?php echo $pro_no;?>_<?php echo $product_price;?>" type="number" onchange="total(this.id)" value="<?php echo $product_qty;?>" min="1" max="10" requierd>
                        </div>
                        
                      </div>
                      <div class="col-4 text-l">
                        <h5 id="qty<?php echo $pro_no;?>" class="sub_tot"><?php echo ($product_price*$product_qty);?></h5>
                      </div>
                    </div>
                  </div> 
                  

                   <?php } }else{echo "<h5 class='text-center'>Add products</h5>";}}?>
              
                  
                  <!-- cart-total  -->
                  <div class="row">
                    <div class="col-3"></div>
                    <div class="col-9">
                      <hr>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-6">
                              <div class="container-fluid text-l">
                                <div class="row">
                                  <div class="col">Sub Total:</div>
                                </div>
                                <div class="row">
                                  <div class="col">Tax:</div>
                                </div>
                                <div class="row">
                                  <div class="col">Total:</div>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="container-fluid text-l">
                                <div class="row">
                                  <div class="col" id="sub_sub_total">000</div>
                                </div>
                                <div class="row">
                                  <div class="col" id="tax">000</div>
                                </div>
                                <div class="row">
                                  <div class="col"id="final_total">0000</div>
                                </div>
                              </div>
                             
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
        </div>
        <div class="col-md-3 cart-right"></div>
       
      </div>
                              <div class="container-fluid " >
                                  <div class="row">
                                    <div class="col-12 text-center d-flex align-items-center justify-content-center">
                                      <label for="order-desc" class="" >Order suggestion</label>
                                      <textarea name="order_desc" id="order_desc" cols="30" rows="1" class="" onchange="order_desc()" style="margin-left : 4px;"></textarea>
                                   </div>
                                  </div>
                              </div>
                              
                              <div class="container-fluid mt-3">
                                  <div class="row">
                                    <div class="col-12 text-center">
                                      <input type="hidden" value="<?php echo $_SESSION['id']; ?>">
                                      <input type="hidden" id="desc" value="">
                                      <input type="hidden" id="tab_no" value="">

                                      <button type="submit" class="btn btn-primary w-25">Make Order</button>
                                   </div>
                                  </div>
                              </div>
                              <div class="container-fluid mt-3">
                                  <div class="row">
                                    <div class="col-12 text-center">
                                      <h5><a href="index.php">Go Back</a></h5>
                                   </div>
                                  </div>
                              </div>
    </div>
    <script>
                    // var prd_qty = ;
                    // document.getElementById('qty').value = prd_qty;
                    // var sub_total = ( prd_qty * );
                    // document.getElementById('sub_total').innerText = sub_total;
                    let prd_tot1 = document.getElementsByClassName('sub_tot');
                      let p1=0;
                    let sub1=0;
                    let sum1=0;


                    while(p1 < (prd_tot1.length )){
                        // console.log(document.getElementsByClassName('sub_tot')[p].innerText);
                        sub1 = parseInt(document.getElementsByClassName('sub_tot')[p1].innerText);

                        console.log(typeof(sub1));
                        sum1 =sum1 + sub1 ;
                        // console.log(sum1);
                        p1++;

                      }

                      document.getElementById("sub_sub_total").innerText = sum1; 
                      let tax1 = (3*sum1)/100;
                      document.getElementById("tax").innerText = tax1; 
                      document.getElementById("final_total").innerText = (sum1 + parseInt(document.getElementById("tax").innerText)); 
                      // document.getElementById('sub_sub_total').innnerText = sum;
                      document.getElementById("sub_sub_total").innerText = sum1;       

                      let sub = 0;

                    function order_desc() {
                        let val = document.getElementById('order_desc').value;
                        document.getElementById('desc').value = val;
                        
                        
                        // alert(val);
                        // return val;
                    }
                    function total(id){
                      // console.log(id);
                      var ids = id.split('_');
                      // console.log(ids);
                      var qty = document.getElementById(id).value;
                      var price =  ids[1];
                      var sub_total = ( qty * price);
                      document.getElementById(ids[0]).innerText = sub_total; 
                      // console.log('hey');

                      let prd_tot = document.getElementsByClassName('sub_tot');
                      let sum = 0;
                      let  p = 0;
                      // console.log(prd_tot.length);
                      while(p < (prd_tot.length )){
                        // console.log(document.getElementsByClassName('sub_tot')[p].innerText);
                        sub = parseInt(document.getElementsByClassName('sub_tot')[p].innerText);

                        console.log(typeof(sub));
                        sum =sum + sub ;
                        console.log(sum);
                        p++;

                      }
                      // document.getElementById('sub_sub_total').innnerText = sum;
                      document.getElementById("sub_sub_total").innerText = sum; 
                      let tax = (3*sum)/100;
                      document.getElementById("tax").innerText = tax; 
                      document.getElementById("final_total").innerText = (sum + parseInt(document.getElementById("tax").innerText)); 

                        
                      
                    }
                  </script>


  </body>
</html>
