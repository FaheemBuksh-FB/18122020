<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background: url(https://ca-times.brightspotcdn.com/dims4/default/1b8cffb/2147483647/strip/true/crop/2000x1125+0+104/resize/1200x675!/quality/90/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F66%2F94%2Fedc1f05aaf46292653edf9cdabe8%2Fla-fi-wirecutter-business-laptops-20150731-004);

            background-repeat: no-repeat;


        }

        #btn {
            border-radius: 20px;
        }

        #box {

            margin-left: 125px;
            color: rgb(53, 220, 123);
            font-family: roboto;
            margin-top: 45px;
        }
        .view,
        body,
        html {
            height: 100%
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-md bg-primary text-white navbar-dark ">
<?php
include('connection.php');
echo $email;

?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav" style="margin-right: 31vh;">
                <li class="nav-item">
                    <a class="nav-link pl-3 pr-3   text-white" href="index.HTML">Home</a>
        
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link pl-3 pr-3   text-white" href=" product.html">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link pl-3 pr-3   text-white" href="about.html">About</a>
                  </li>
        
        
                  <li class="nav-item">
                    <a class="nav-link pl-3 pr-3   text-white" href="contact.html">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link pl-3 pr-3   text-white" href="faqs.html">FAQ's</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link pl-3 pr-3  text-white" href="new arrival.html">New Aaival</a>
                  </li>
        

            </ul>


            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.3743 19.524C15.7926 19.524 19.3743 15.9423 19.3743 11.524C19.3743 7.10577 15.7926 3.52405 11.3743 3.52405C6.95605 3.52405 3.37433 7.10577 3.37433 11.524C3.37433 15.9423 6.95605 19.524 11.3743 19.524Z"
                                stroke="#FFF4E6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.3744 21.5241L17.0244 17.1741" stroke="#FFF4E6" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.facebook.com" class="nav-link" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                        <svg width="14" height="23" viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.3743 1.65778H9.37433C8.04825 1.65778 6.77648 2.18456 5.83879 3.12224C4.90111 4.05992 4.37433 5.33169 4.37433 6.65778V9.65778H1.37433V13.6578H4.37433V21.6578H8.37433V13.6578H11.3743L12.3743 9.65778H8.37433V6.65778C8.37433 6.39256 8.47969 6.13821 8.66722 5.95067C8.85476 5.76313 9.10911 5.65778 9.37433 5.65778H12.3743V1.65778Z"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com" class="nav-link" target="_blank">
                        <i class="fab fa-twitter"></i>
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23 3.28343C22.0424 3.95891 20.9821 4.47554 19.86 4.81343C19.2577 4.12094 18.4573 3.63012 17.567 3.40736C16.6767 3.18459 15.7395 3.24063 14.8821 3.56789C14.0247 3.89514 13.2884 4.47783 12.773 5.23715C12.2575 5.99646 11.9877 6.89577 12 7.81343V8.81343C10.2426 8.859 8.50127 8.46925 6.93101 7.67888C5.36074 6.88851 4.01032 5.72207 3 4.28343C3 4.28343 -1 13.2834 8 17.2834C5.94053 18.6814 3.48716 19.3824 1 19.2834C10 24.2834 21 19.2834 21 7.78343C20.9991 7.50489 20.9723 7.22703 20.92 6.95343C21.9406 5.94693 22.6608 4.67614 23 3.28343V3.28343Z"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://instagram.com" class="nav-link" target="_blank">
                        <i class="fab fa-twitter"></i>
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.3743 2.65778H7.37433C4.6129 2.65778 2.37433 4.89635 2.37433 7.65778V17.6578C2.37433 20.4192 4.6129 22.6578 7.37433 22.6578H17.3743C20.1358 22.6578 22.3743 20.4192 22.3743 17.6578V7.65778C22.3743 4.89635 20.1358 2.65778 17.3743 2.65778Z"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16.3743 12.0278C16.4978 12.86 16.3556 13.71 15.9681 14.4568C15.5806 15.2036 14.9675 15.8092 14.216 16.1874C13.4644 16.5657 12.6128 16.6974 11.7821 16.5637C10.9515 16.43 10.1841 16.0379 9.58918 15.4429C8.99426 14.848 8.60207 14.0806 8.46841 13.25C8.33474 12.4193 8.46641 11.5677 8.84467 10.8161C9.22293 10.0646 9.82853 9.45151 10.5753 9.06401C11.3221 8.67651 12.1721 8.53436 13.0043 8.65777C13.8533 8.78366 14.6392 9.17924 15.246 9.78608C15.8529 10.3929 16.2485 11.1788 16.3743 12.0278Z"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.8743 7.15778H17.8843" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />

                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path
                                    d="M9.37433 22.524C9.92661 22.524 10.3743 22.0763 10.3743 21.524C10.3743 20.9718 9.92661 20.524 9.37433 20.524C8.82204 20.524 8.37433 20.9718 8.37433 21.524C8.37433 22.0763 8.82204 22.524 9.37433 22.524Z"
                                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M20.3743 22.524C20.9266 22.524 21.3743 22.0763 21.3743 21.524C21.3743 20.9718 20.9266 20.524 20.3743 20.524C19.822 20.524 19.3743 20.9718 19.3743 21.524C19.3743 22.0763 19.822 22.524 20.3743 22.524Z"
                                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M1.37433 1.52405H5.37433L8.05433 14.914C8.14577 15.3744 8.39624 15.788 8.76187 16.0823C9.12751 16.3767 9.58503 16.533 10.0543 16.524H19.7743C20.2436 16.533 20.7011 16.3767 21.0668 16.0823C21.4324 15.788 21.6829 15.3744 21.7743 14.914L23.3743 6.52405H6.37433"
                                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="24" height="24" fill="white"
                                        transform="translate(0.374329 0.524048)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>


            </ul>

        </div>

        </div>
    </nav>
    </div>
    </nav>
    <div class=" container-fluid text-primary text-center mt-5 pt-3">
        <div class="w3-container">
            <h1 style="margin-top: 25vh; color:#007BFF;font-family:revalia,cursive; font-weight: 530;">WELCOME HERE BUDDY :)</h1>
          </div>
        <h6 style="margin-top: 3vh; color:#007BFF;font-family: Apple Chancery, cursive;">Ready-to- shop product pre-built with the features</br>that
            you need and want</h6>
    </div>







</body>

</html>