<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="media/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mansalva&display=swap" rel="stylesheet">
    <script src="/js/main.js"></script>
    <title>COUTUREX - Your Freestyle Design</title>
</head>

    <header>
        <nav>
            <img class="imglogo" src="media/img/logo_header.svg">
            <div class="input-container2">
                <input type="text" name="text" class="input" placeholder="buscar...">
                <span class="icon"> 
                  <svg width="19px" height="19px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="1" d="M14 5H20" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M14 8H17" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="1" d="M22 22L20 20" stroke="#000" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                </span>
            </div>
            <ul>
                <li class="lihead2" ><a class="aheader" href="index.html">Home</a></li>
                <li class="lihead2" ><a class="aheader" href="upper.php">Upper Body</a></li>
                <li class="lihead2" ><a class="aheader" href="lower.php">Lower Body</a></li>
                <li class="lihead2" ><a class="aheader" href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <body>
      
    <?php
      $servername = "10.43.196.50";
      $database = "PRODUCTES";
      $username = "srvweb";
      $password = "rogerjuan2006";

      echo $servername;
      ?>

      <section class="filtrador">
          <h1 class="titleh1cate">FILTER</h1>
          <hr>
          <div class="filtradordiv">
            <table class="tablefiltr">
              <tr>
                <td>
                  <h2 class="titleh2fitlr">PRICE</h2>                      
                </td>
                <td>
                  <select name="price" id="select">
                    <option value="TODOS">Todos</option>
                    <option value="DESC">Higher to Lower</option>
                    <option value="ASC">Lower to Higher</option>
                  </select>                  
                </td>
                <td>
                  <h2 class="titleh2fitlr">TYPE OF CLOTHING</h2>    
                </td>
                <td>
                  <select name="clothing" id="select">
                    <option value="TODOS">All</option>
                    <option value="PNT">PANTS</option>
                    <option value="SHTS">SHORTS</option>
                    <option value="SW">SHOES</option>
                  </select>  
                </td>
                <td>
                  <h2 class="titleh2fitlr">BRANDS</h2>    
                </td>
                <td>
                  <select name="brand" id="select">
                    <option value="all">All</option>
                    <option value="brand1">ADIDAS</option>
                    <option value="brand2">AMI</option>
                    <option value="brand3">AMIRI</option>
                    <option value="brand4">BURBERRY</option>
                    <option value="brand5">CANADA GOOSE</option>
                    <option value="brand6">CARHARTT</option>
                    <option value="brand7">C.P COMPANY</option>
                    <option value="brand8">DIOR</option>
                    <option value="brand9">DSQUARED2</option>
                    <option value="brand10">ESSENTIALS</option>
                    <option value="brand11">LACOSTE</option>
                    <option value="brand12">MONCLER</option>
                    <option value="brand13">NIKE</option>
                    <option value="brand14">OFF-WHITE</option>
                    <option value="brand15">PALM ANGELS</option>
                    <option value="brand16">RALPH LAUREN</option>
                    <option value="brand17">STONE ISLAND</option>
                    <option value="brand18">STUSSY</option>
                  </select>                  
                </td>
              </tr>
            </table>
          </div>
      </section>
      <section class="catalogo">
        <figure class="card shadow">
          <img src="">
          <div>
            <h3></h3>
            <p></p>
          </div>
          <button>

          </button>
        </figure>
        <figure class="card shadow">
          <img src="">
          <div>
            <h3></h3>
            <p></p>
          </div>
          <button>
            
          </button>
        </figure>
        <figure class="card shadow">
          <img src="">
          <div>
            <h3></h3>
            <p></p>
          </div>
          <button>
            
          </button>
        </figure>
        <figure class="card shadow">
          <img src="">
          <div>
            <h3></h3>
            <p></p>
          </div>
          <button>
            
          </button>
        </figure>
        <figure class="card shadow">
          <img src="">
          <div>
            <h3></h3>
            <p></p>
          </div>
          <button>
            
          </button>
        </figure>
        <figure class="card shadow">
          <img src="">
          <div>
            <h3></h3>
            <p></p>
          </div>
          <button>
            
          </button>
        </figure>
        <figure class="card shadow">
          <img src="">
          <div>
            <h3></h3>
            <p></p>
          </div>
          <button>
            
          </button>
        </figure>
        <figure class="card shadow">
          <img src="">
          <div>
            <h3></h3>
            <p></p>
          </div>
          <button>
            
          </button>
        </figure>
      </section>
    </body>

    <footer>
        <hr>
        <div>
            <img class="moodle-img" src="media/img/Moodle-1.png">
            <table class="tablefooter">
                <tr>
                  <td><a class="afooter" href="index.html">Home</a></td>
                  <td><a class="afooter" href="upper.html">Upper Body</a></td>
                </tr>
                <tr>
                  <td><a class="afooter" href="contact.html">Contact Us</a></td>
                  <td><a class="afooter" href="lower.html">Lower Body</a></td>
                </tr>
              </table>
            <img class="wordpress-img" src="media/img/WordPress-logotype-wmark.png">
        </div>
        <hr>
            <div>
                <a href=""><img class="instik" src="media/img/tiktok_logo.png"></a>
                <a href=""><img class="instik" src="media/img/instagram_logo.png"></a>
            </div>
        <hr>
            <p class="pfooter">© 2024 COUTUREX. Tots els drets reservats </p>
    </footer>
    
</html>