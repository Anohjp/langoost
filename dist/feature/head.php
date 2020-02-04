<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Langoost</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="css/tailwind.css" type="text/css">
    <link rel="stylesheet" href="css/luxbar.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap" rel="stylesheet">

    <script defer src="fonts/awesome/js/all.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Uncomment for cdn tailwind (if you haven't built your tailwind.css yet) <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">-->

    <style>

        html {
            scroll-behavior: smooth;
        }
        .hoverable.b2b > a:after {
            content: url("images/icon/png/arrow-menu-b2b.png");
            font-size: 10px;
            padding-left: 6px;
            position: absolute;
            top: 53px;
            left: 30%;
            display: none;
        }
        .hoverable.b2c > a:after {
            content: url("images/icon/png/arrow-menu-b2c.png");
            font-size: 10px;
            padding-left: 6px;
            position: absolute;
            top: 53px;
            left: 30%;
            display: none;
        }

        .hoverable.nos-tarifs a:after, .hoverable.notre-blog a:after{
            content: '';
        }
        .hoverable:hover > a:after{
            display: block;
        }
        .hoverable:hover .mega-menu {
            display: block;
        }


        

  /* ––––––––––––––––––––––––––––––––––––––––––––––––––
    Based on: https://codepen.io/nickelse/pen/YGPJQG
    Influenced by: https://sproutsocial.com/
  –––––––––––––––––––––––––––––––––––––––––––––––––– */


  /* #Mega Menu Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  .mega-menu {
    display: none;
    left: 0;
    position: absolute;
    text-align: left;
    width: 100%;
  }



  /* #hoverable Class Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  .hoverable {
    position: static;
  }

  .hoverable > a:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }

  .hoverable:hover .mega-menu {
    display: block;
  }


  /* #toggle Class Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */

  .toggleable > label:after {
    /*content: "\25BC";*/
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }

  .toggle-input {
    display: none;
  }
  .toggle-input:not(checked) ~ .mega-menu {
    display: none;
  }

  .toggle-input:checked ~ .mega-menu {
    display: block;
  }

  .toggle-input:checked + label {
    color: white;
    color: #fe6c35;
  }

  .toggle-input:checked ~ label:after {
    content: "\25B2";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }


    </style>

    <!---Style Accordion--->
    <style>
        /* Tab content - closed */
        .tab-content {
            max-height: 0;
            -webkit-transition: max-height .35s;
            -o-transition: max-height .35s;
            transition: max-height .35s;
        }
        /* :checked - resize to full height */
        .tab input:checked ~ .tab-content {
            max-height: 100vh;
        }
        /* Label formatting when open */
       
        /* Icon */
        .tab label::after {
            float:right;
            padding: 7px;
            right: 0;
            top: 0;
            display: block;
            width: 2.5em;
            height: 2.5em;
            line-height: 1.5;
            font-size: 1.25rem;
            text-align: center;
            -webkit-transition: all .35s;
            -o-transition: all .35s;
            transition: all .35s;
        }
        
        .tab input[type=radio] + label::after {
            content: url(images/icon/svg/chevron-down-solid.svg);
            font-weight:bold; /*.font-bold*/
            border-radius: 9999px; /*.rounded-full */
            background-color: #f9f0f1;
            color: #fe6c35;
            font-size: 10px;
        }
        /* Icon formatting - open */
        .tab input[type=checkbox]:checked + label::after {
            transform: rotate(315deg);
            background-color: #f9f0f1; /*.bg-indigo*/
            color: #fe6c35; /*.text-grey-lightest*/
        }
        .tab input[type=radio]:checked + label::after {
            transform: rotateX(180deg);
            background-color: #f9f0f1; /*.bg-indigo*/
            color: #fe6c35; /*.text-grey-lightest*/
        }


        /******************************* Menu Mobile *************************************************/


         /******* Accordeon Model2  *******/
        /* Tab content - closed */
         .tab-content {
         max-height: 0;
         -webkit-transition: max-height .35s;
         -o-transition: max-height .35s;
         transition: max-height .35s;
         }
         /* :checked - resize to full height */
         .tab input:checked ~ .tab-content {
         max-height: 100vh;
         }
         /* Label formatting when open */
        

         .tab input[type=radio] + label::after {
         font-weight:bold; /*.font-bold*/
         position: absolute;
         background-color: #c7a9de;
             top: 28px;
         }
         /* Icon formatting - open */
         .tab input[type=checkbox]:checked + label::after {
         transform: rotate(315deg);
         }
         .tab input[type=radio]:checked + label::after {
         transform: rotateX(180deg);
         background-color: #c7a9de; /*.bg-indigo*/
         }

         .accordeon-number{
           display: inline-table
         }
        
    </style>

    <script>
      /* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
      function mobileMenu() {
        var x = document.getElementById("menuBar");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
    </script>
    <script> 
      // Function to toggle the plus menu into minus 
      function myFunction(x) { 
        x.classList.toggle("fas fa-times"); 
      } 
    </script>
</head>