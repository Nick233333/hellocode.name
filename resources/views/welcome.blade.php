<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="dns-prefetch" href="//cdn.bootcss.com/" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" >
    <link rel="shortcut icon" href="/favicon.png">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="author" content="Nick">
    <title>Welcome To HelloCode.name!</title>
    <meta name="Keywords" content="php,laravel,vue,js,mysql,css,html5" />
    <meta name="Description" content="php,laravel,vue,js,mysql,css,html5信息。" />
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        #particles {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .full-height {
            background-color: #fff;
            color: #6289ad;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            z-index: 100;
            margin-bottom: 15vh;
        }

        .title {
            font-size: 30px;
        }

        .description {
            margin: 16px 0;
            font-size: 24px;
            font-weight: bold;
        }

        .links > a {
            color: #9caebf;
            padding: 0 15px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .links > a:hover {
            color: #52697f;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .avatar {
            width: 120px !important;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div id="particles"></div>
    <div class="content">
        <div class="title m-b-md">Web developers</div>

        <!-- <div class="description">
            www.hellocode.name
        </div> -->

        <div class="links">
            <a href="https://wp.hellocode.name/">Blog</a>
            <a href="https://weibo.com/338367899/">Weibo</a>
            <a href="https://github.com/nick233333">GitHub</a>
            <a href="https://wp.hellocode.name/?page_id=141">Me</a>
        </div>
    </div>
    <div style="position: fixed;bottom: 15px;text-align: center;">
        <p>Copyright © 2019 hellocode.name 版权所有</p>
        <p><a style="color: #9caebf;text-decoration: none;" href="http://www.beian.miit.gov.cn">粤ICP备17086092号-1</a></p>
    </div>
</div>
<script src="https://cdn.bootcss.com/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS("particles", {
        "particles": {
            "number": {
                "value": 10,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#52697f"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.1,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 20,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 20,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 1000,
                "color": "#52697f",
                "opacity": 0.2,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 4,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>
</body>
</html>
