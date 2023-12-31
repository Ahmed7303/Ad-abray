@extends('layouts.app')

@section('content')
    <!-- ========================
                            page title
                            =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img">
            <img src="images/marketing-bg.png" alt="background">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.html">{{ __('strings.home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('strings.marketing') }}
                            </li>
                        </ol>
                    </nav>
                    <h1 class="pagetitle__heading">{{ __('strings.marketing') }}</h1>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /.page-title -->

    <!-- Marketing ======================== -->
    <section class="market">
        <div class="container">
            <div class="market_wrap">
                <h2 class="main_title">
                    {{ __('strings.goods history') }}
                </h2>

                <div class="tabs">
                    <h4 class="tabs_link tabBtn active" data-tab="#import">
                        <span>
                            <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.6314 6.10352e-05C15.3732 6.10352e-05 15.1639 0.209954 15.1639 0.46881C15.1639 0.727667 15.3732 0.93756 15.6314 0.93756C19.3492 0.941745 22.9139 2.42481 25.5428 5.06111C28.1718 7.69741 29.6507 11.2716 29.6549 15.0002C29.6549 15.2591 29.8642 15.4689 30.1223 15.4689C30.3805 15.4689 30.5898 15.2591 30.5898 15.0002C30.5854 11.0234 29.008 7.21039 26.2037 4.39843C23.3995 1.58636 19.5975 0.00472174 15.6314 0.000114607L15.6314 6.10352e-05Z"
                                    fill="black" />
                                <path
                                    d="M15.6816 20.625H16.5159C16.5484 20.5608 16.5658 20.4896 16.5662 20.4174V17.317C16.5658 16.9512 16.4207 16.6007 16.1628 16.3421C15.9049 16.0834 15.5551 15.938 15.1904 15.9375H11.658V14.3181C11.6572 13.9393 11.5065 13.5762 11.2392 13.3086C10.9719 13.0411 10.6094 12.8907 10.2317 12.8907H4.67045C4.29274 12.8907 3.93028 13.0411 3.66296 13.3086C3.39564 13.5762 3.24497 13.9393 3.24414 14.3181V15H3.01041C2.63855 15.0005 2.28211 15.1488 2.01916 15.4123C1.75643 15.676 1.60848 16.0334 1.60806 16.4063V20.6251H2.54295V16.4063C2.54316 16.1475 2.75247 15.9378 3.0104 15.9376H7.68485C7.94299 15.9378 8.15209 16.1475 8.1523 16.4063V20.6251H9.08718V16.4063C9.08677 16.0334 8.93881 15.676 8.67608 15.4123C8.41314 15.1488 8.05671 15.0005 7.68483 15H4.179V14.3181C4.18004 14.0469 4.39999 13.8278 4.67044 13.8282H10.2317C10.5021 13.8278 10.7221 14.0469 10.7231 14.3181V16.116C10.5107 16.236 10.3337 16.4105 10.2106 16.6214C10.0873 16.8324 10.0222 17.0726 10.022 17.317V20.625H10.9569V17.317C10.9571 17.073 11.1545 16.8752 11.3978 16.875H15.1904C15.4339 16.8752 15.6311 17.073 15.6313 17.317V20.4174C15.6317 20.4896 15.649 20.5608 15.6816 20.625L15.6816 20.625Z"
                                    fill="black" />
                                <path
                                    d="M29.1873 4.28571e-05C28.8154 4.28571e-05 28.4588 0.1482 28.1957 0.411873C27.9327 0.675545 27.785 1.03341 27.785 1.40626C27.785 1.77912 27.9327 2.13703 28.1957 2.40066C28.4588 2.66433 28.8155 2.81249 29.1873 2.81249C29.5591 2.81249 29.916 2.66433 30.1789 2.40066C30.4418 2.13698 30.5896 1.77912 30.5896 1.40626C30.5892 1.03336 30.4412 0.675926 30.1785 0.412248C29.9156 0.148784 29.5591 0.000417857 29.1872 0L29.1873 4.28571e-05ZM29.1873 1.87504C28.9982 1.87504 28.8277 1.76078 28.7555 1.58563C28.6831 1.41048 28.7232 1.20896 28.8567 1.07482C28.9905 0.940681 29.1915 0.900711 29.3661 0.973327C29.5408 1.04573 29.6547 1.2167 29.6547 1.40629C29.6545 1.66515 29.4454 1.87483 29.1873 1.87504Z"
                                    fill="black" />
                                <path
                                    d="M3.23687 7.61948V0.46878C3.23687 0.209923 3.02756 3.05176e-05 2.76942 3.05176e-05C2.51129 3.05176e-05 2.30198 0.209923 2.30198 0.46878V7.15073H1.14068C0.96727 7.15073 0.808045 7.247 0.727078 7.40101C0.646319 7.55503 0.657169 7.74128 0.755249 7.88462L3.55992 11.9837C3.64715 12.1111 3.79135 12.1873 3.94535 12.1873C4.09936 12.1873 4.24355 12.1111 4.33078 11.9837L7.13545 7.88462C7.23353 7.74127 7.24439 7.55503 7.16362 7.40101C7.08287 7.247 6.92364 7.15073 6.75002 7.15073H5.57409V2.73276C5.57409 2.4739 5.36478 2.26401 5.10664 2.26401C4.84851 2.26401 4.6392 2.4739 4.6392 2.73276V7.61948C4.6392 7.87834 4.84851 8.08823 5.10664 8.08823H5.8623L3.94535 10.8901L2.0284 8.08823H2.76942C3.02755 8.08823 3.23686 7.87834 3.23686 7.61948H3.23687Z"
                                    fill="black" />
                                <path
                                    d="M28.176 23.7932C28.2993 23.5384 28.2695 23.2356 28.0988 23.01L25.8605 20.5036H25.8603C25.6124 20.1596 25.223 19.946 24.8004 19.9221H23.5371C23.2885 19.9347 23.055 20.0454 22.8877 20.2299C22.7203 20.4145 22.6324 20.6579 22.6433 20.9074V23.1559C22.6324 23.4051 22.7203 23.6485 22.8877 23.8331C23.055 24.0177 23.2885 24.1284 23.5371 24.1409H27.5488C27.8061 24.1514 28.0479 24.0175 28.176 23.7933L28.176 23.7932ZM23.5858 23.2033C23.5806 23.188 23.5779 23.1719 23.5781 23.1558V20.9073C23.5779 20.8909 23.5806 20.8748 23.5858 20.8595H24.8003C24.921 20.8855 25.0282 20.9541 25.1025 21.0529L27.022 23.2033L23.5858 23.2033Z"
                                    fill="black" />
                                <path
                                    d="M6.28247 23.9062H4.41269C4.15455 23.9062 3.94525 24.1161 3.94525 24.375C3.94525 24.6339 4.15455 24.8437 4.41269 24.8437H6.28247C6.54061 24.8437 6.74992 24.6339 6.74992 24.375C6.74992 24.1161 6.54061 23.9062 6.28247 23.9062Z"
                                    fill="black" />
                                <path
                                    d="M14.9305 24.375C14.9305 24.1161 14.7212 23.9062 14.463 23.9062H12.5932C12.3351 23.9062 12.1258 24.1161 12.1258 24.375C12.1258 24.6339 12.3351 24.8437 12.5932 24.8437H14.463C14.7212 24.8437 14.9305 24.6339 14.9305 24.375Z"
                                    fill="black" />
                                <path
                                    d="M25.4477 25.7812C24.8899 25.7812 24.3549 26.0035 23.9602 26.399C23.5658 26.7947 23.3442 27.3312 23.3442 27.8906C23.3442 28.45 23.5658 28.9865 23.9602 29.3823C24.3549 29.7778 24.8899 30 25.4477 30C26.0056 30 26.5406 29.7778 26.9352 29.3823C27.3296 28.9865 27.5512 28.45 27.5512 27.8906C27.5512 27.3312 27.3296 26.7947 26.9352 26.399C26.5406 26.0035 26.0056 25.7812 25.4477 25.7812ZM25.4477 29.0625C25.1378 29.0625 24.8405 28.939 24.6213 28.7193C24.4022 28.4996 24.2791 28.2014 24.2791 27.8906C24.2791 27.5798 24.4022 27.2817 24.6213 27.0619C24.8405 26.8422 25.1378 26.7187 25.4477 26.7187C25.7576 26.7187 26.055 26.8422 26.2741 27.0619C26.4933 27.2816 26.6164 27.5798 26.6164 27.8906C26.6159 28.2014 26.4928 28.4991 26.2737 28.7189C26.0546 28.9386 25.7576 29.0621 25.4477 29.0625L25.4477 29.0625Z"
                                    fill="black" />
                                <path
                                    d="M27.638 17.325L28.333 18.1646C29.0212 15.3956 28.7904 12.4769 27.6752 9.85137C26.56 7.22594 24.6214 5.03686 22.1535 3.6162C19.6854 2.19533 16.8227 1.62045 13.9996 1.97874C11.1764 2.33679 8.54683 3.6087 6.50931 5.60107V6.21339H6.75033C6.88827 6.21381 7.02558 6.23495 7.15747 6.27575C7.50555 5.93717 7.87322 5.61972 8.25866 5.32486C8.33441 5.54543 8.38533 5.77394 8.41016 6.00581C8.42039 6.07528 8.42978 6.14036 8.43958 6.19791C8.52097 6.52792 8.52222 6.87237 8.44355 7.20301C8.3847 7.37252 8.28349 7.52423 8.14973 7.64372C8.14618 7.91932 8.06146 8.18758 7.90661 8.41526L7.42853 9.11378C7.52077 9.0692 7.61488 9.02505 7.71233 8.97985C7.79893 8.93967 7.88616 8.89928 7.97381 8.85743C8.43061 8.63979 9.06774 8.26332 9.3271 7.50807L9.32731 7.50828C9.46191 7.03053 9.4738 6.526 9.36153 6.04241C9.35277 5.99072 9.34463 5.93275 9.33545 5.8706C9.30561 5.48995 9.19897 5.11937 9.02201 4.78139C10.5521 3.78111 12.2887 3.142 14.1009 2.91266C14.11 3.01667 14.1138 3.12109 14.1121 3.22551L14.1119 3.29896C14.114 3.67438 14.1038 3.9303 13.946 4.06091V4.0607C13.7903 4.16972 13.6188 4.25406 13.4375 4.31098C13.326 4.35346 13.215 4.39614 13.1088 4.4449C12.5765 4.65961 12.0873 4.96953 11.6653 5.35958C11.3214 5.71219 11.2238 6.06313 11.3751 6.40213C11.4736 6.62312 11.7233 6.73256 11.9519 6.65471C12.1804 6.57708 12.3122 6.33768 12.2565 6.10228C12.2805 6.07173 12.3062 6.04285 12.3335 6.01523C12.6772 5.71013 13.0712 5.46736 13.498 5.29727C13.5858 5.25709 13.6774 5.22235 13.7697 5.1874H13.7695C14.0474 5.09721 14.3083 4.96077 14.5412 4.78395C15.053 4.35998 15.0493 3.71814 15.0468 3.29295L15.047 3.23226V3.23205C15.0495 3.09708 15.0441 2.96189 15.0311 2.82755C15.23 2.81771 15.4303 2.81269 15.6317 2.81248C16.635 2.81227 17.6346 2.93678 18.6073 3.1833C18.1724 3.66732 18.0042 4.33551 18.1578 4.96851C18.1609 4.98127 18.1649 4.9955 18.169 5.00785C18.2598 5.23343 18.2753 5.48225 18.2131 5.71724C18.178 5.73733 18.1373 5.7457 18.0973 5.7411C17.7469 5.71327 15.4355 5.58812 15.2617 6.9862L15.2634 6.98641H15.2632C15.2588 7.01299 15.2559 7.03977 15.2544 7.06677C15.2241 7.59076 15.105 7.80193 15.0407 7.87661C14.9744 7.92327 14.9042 7.96429 14.831 7.99903C14.6023 8.09403 14.404 8.25035 14.2579 8.45083C14.1415 8.64 13.7869 9.21545 14.0739 9.70954C14.4055 10.2806 15.2538 10.2488 16.3272 10.2088C17.3222 10.1716 18.5611 10.1251 19.049 10.6316C19.2506 10.8737 19.3374 11.1915 19.2873 11.5029C19.2684 11.6195 19.0764 11.8076 18.4775 11.7767L18.4111 11.7733C17.1106 11.7082 16.7765 11.6417 16.6928 11.6162C15.6586 11.2993 14.371 10.9051 13.0357 11.2491V11.2489C12.3965 11.4201 11.8155 11.762 11.3548 12.2381C11.6334 12.3902 11.8788 12.5966 12.0764 12.8454C12.408 12.5166 12.8185 12.2796 13.2682 12.1569C14.2699 11.8991 15.2469 12.1533 16.4195 12.5124C16.6878 12.5949 17.2878 12.6556 18.3644 12.7095L18.4288 12.7129C19.0413 12.7447 19.5173 12.6118 19.8404 12.318H19.8406C20.0559 12.1293 20.1912 11.8652 20.2187 11.5797C20.2949 10.999 20.1129 10.4141 19.7212 9.97994C18.9434 9.17284 17.5351 9.22533 16.2924 9.272C15.8291 9.28895 15.149 9.31427 14.9109 9.23224H14.9107C14.942 9.13702 14.9852 9.0462 15.0395 8.96207C15.1096 8.91164 15.1841 8.86749 15.2621 8.83087C15.4426 8.75009 15.606 8.63584 15.744 8.49416C16.1342 8.04132 16.1745 7.34886 16.1876 7.1214L16.1882 7.11009L16.1893 7.10214C16.2333 6.74807 17.2957 6.61561 18.0386 6.67671C18.049 6.67755 18.0599 6.67818 18.0705 6.67839C18.4201 6.7035 18.7586 6.54906 18.9695 6.26823C19.3525 5.73984 19.1302 4.93918 19.0622 4.72972C18.9103 4.05691 19.4537 3.62834 19.6475 3.49924H19.6477C21.4586 4.13957 23.0935 5.19948 24.4192 6.59277C25.7449 7.98605 26.7241 9.67355 27.2771 11.5176C26.6634 11.3788 26.0062 11.5969 25.5442 11.7507C25.4407 11.7852 25.3113 11.8283 25.2172 11.8537C24.7998 11.4489 24.2482 11.2125 23.6681 11.1896C23.26 11.1683 22.8654 11.3401 22.6024 11.6538C22.3395 11.9675 22.2385 12.3869 22.3297 12.7863C22.3729 12.9422 22.4338 13.0925 22.5112 13.2342C22.5492 13.3112 22.6116 13.4378 22.6429 13.525C22.5688 13.5541 22.4901 13.5698 22.4106 13.5711C22.2483 13.5843 22.0859 13.5485 21.944 13.4685C21.8082 13.3091 21.6295 13.1917 21.4294 13.1306C21.2293 13.0693 21.016 13.0668 20.8144 13.123C20.6466 13.1854 20.5014 13.2967 20.3973 13.4424C20.2929 13.5882 20.2347 13.7619 20.2297 13.9413C20.1756 14.4908 20.3029 15.043 20.5917 15.513C20.8689 15.7033 21.1093 15.9425 21.301 16.2189C21.42 16.2896 21.5433 16.3522 21.6708 16.4062H23.227C23.2217 16.3595 23.2117 16.3137 23.1969 16.2691C23.117 16.0484 22.9406 15.8768 22.7182 15.8033C22.6193 15.7642 22.5189 15.7276 22.4185 15.6914C22.083 15.6047 21.7737 15.4365 21.5185 15.2013C21.2436 14.8777 21.1138 14.4548 21.16 14.0326C21.199 14.0526 21.234 14.0794 21.2637 14.1119C21.5925 14.4615 22.2057 14.5532 22.6358 14.4906H22.636C23.0058 14.4609 23.3371 14.2493 23.5202 13.9254C23.7097 13.5487 23.5097 13.1438 23.3493 12.8184H23.3491C23.3084 12.7412 23.2725 12.6615 23.2416 12.5796C23.2151 12.4645 23.2445 12.3436 23.3211 12.2536C23.3931 12.1655 23.5035 12.1178 23.6168 12.1257C23.9874 12.1314 24.3397 12.2894 24.5911 12.5625C24.8787 12.9609 25.367 12.7983 25.8392 12.6403C26.2726 12.4959 26.8659 12.2982 27.2217 12.4855H27.2215C27.4381 12.6305 27.5875 12.8565 27.6364 13.1131C27.6376 13.117 27.6397 13.1204 27.641 13.1244V13.1241C27.8538 14.495 27.8309 15.8925 27.5731 17.2556C27.5942 17.2791 27.6182 17.3008 27.6383 17.3249L27.638 17.325Z"
                                    fill="black" />
                                <path
                                    d="M10.4895 25.7812C9.93169 25.7812 9.39662 26.0035 9.00199 26.399C8.60758 26.7947 8.38597 27.3312 8.38597 27.8906C8.38597 28.45 8.60759 28.9865 9.00199 29.3823C9.3966 29.7778 9.93164 30 10.4895 30C11.0473 30 11.5823 29.7778 11.977 29.3823C12.3714 28.9865 12.593 28.45 12.593 27.8906C12.593 27.3312 12.3714 26.7947 11.977 26.399C11.5824 26.0035 11.0473 25.7812 10.4895 25.7812ZM10.4895 29.0625C10.1796 29.0625 9.88223 28.939 9.66309 28.7193C9.44395 28.4996 9.32085 28.2014 9.32085 27.8906C9.32085 27.5798 9.44398 27.2817 9.66309 27.0619C9.8822 26.8422 10.1796 26.7187 10.4895 26.7187C10.7994 26.7187 11.0967 26.8422 11.3159 27.0619C11.535 27.2816 11.6581 27.5798 11.6581 27.8906C11.6577 28.2014 11.5346 28.4991 11.3154 28.7189C11.0963 28.9386 10.7994 29.0621 10.4895 29.0625L10.4895 29.0625Z"
                                    fill="black" />
                                <path
                                    d="M4.64667 27.6562C4.38854 27.6562 4.17923 27.8661 4.17923 28.125C4.17923 28.3839 4.38854 28.5937 4.64667 28.5937H7.53629C7.48078 28.3636 7.45219 28.1275 7.45136 27.8906C7.45136 27.8115 7.4572 27.7339 7.46325 27.6562H4.64667Z"
                                    fill="black" />
                                <path
                                    d="M26.919 17.924C26.6043 17.5705 26.1594 17.361 25.6871 17.3437H20.8351C20.707 16.918 20.4396 16.5479 20.0763 16.2928C19.713 16.0377 19.2748 15.9125 18.832 15.9374H17.6688C17.4107 15.9374 17.2014 16.1473 17.2014 16.4062C17.2014 16.665 17.4107 16.8749 17.6688 16.8749H18.832C19.1387 16.8749 20.0724 16.8749 20.0724 18.4768V21.5624H1.14058C0.882442 21.5624 0.673134 21.7723 0.673134 22.0312C0.673134 22.29 0.882442 22.4999 1.14058 22.4999H20.0724V27.6562H13.5164C13.5222 27.7338 13.5283 27.8114 13.5283 27.8905C13.5274 28.1274 13.4989 28.3635 13.4434 28.5937H22.4947C22.4392 28.3635 22.4106 28.1274 22.4098 27.8905C22.4098 27.8114 22.4156 27.7338 22.4217 27.6562H21.0074V18.4767C21.0074 18.4098 21.0039 18.3457 21.0009 18.2811H25.6873C25.881 18.2995 26.0623 18.3849 26.1998 18.5226L29.4231 22.4167C29.5577 22.6065 29.6378 22.8296 29.6552 23.0619V27.5907C29.6552 27.6267 29.6262 27.6558 29.5903 27.656H28.4747C28.4805 27.7337 28.4865 27.8113 28.4865 27.8904C28.4857 28.1273 28.4571 28.3633 28.4016 28.5935H29.5903C29.8555 28.5931 30.1095 28.4874 30.297 28.2995C30.4844 28.1114 30.5898 27.8567 30.59 27.5908V23.0619C30.5742 22.6105 30.4177 22.1754 30.1424 21.818L26.919 17.924Z"
                                    fill="black" />
                            </svg>
                        </span>
                        {{ __('strings.import') }}
                    </h4>

                    <h4 class="tabs_link tabBtn" data-tab="#export">
                        <span>
                            <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.1189 22.5774V25.7585H27.3127V22.5774H24.1964V24.1679H23.1577V22.5774H22.1189Z"
                                    fill="black" />
                                <path d="M21.08 18.3359H17.9637V19.9265H16.925V18.3359H15.8862V21.517H21.08V18.3359Z"
                                    fill="black" />
                                <path d="M3.42114 22.5774V25.7585H8.61493V22.5774H5.49866V24.1679H4.4599V22.5774H3.42114Z"
                                    fill="black" />
                                <path d="M15.8862 22.5774V25.7585H21.08V22.5774H17.9637V24.1679H16.925V22.5774H15.8862Z"
                                    fill="black" />
                                <path
                                    d="M8.61493 18.3359H5.49866V19.9265H4.4599V18.3359H3.94052C3.65486 18.3359 3.42114 18.5745 3.42114 18.8661V21.517H8.61493V18.3359Z"
                                    fill="black" />
                                <path
                                    d="M27.3127 18.8661C27.3127 18.5745 27.079 18.3359 26.7933 18.3359H24.1964V19.9265H23.1577V18.3359H22.1189V21.517H27.3127V18.8661Z"
                                    fill="black" />
                                <path
                                    d="M0.824215 28.4094C0.824215 28.701 1.05794 28.9396 1.34359 28.9396H6.10888C6.39454 28.1112 7.28398 27.6804 8.09552 27.972C8.53699 28.131 8.88759 28.4889 9.0434 28.9396H21.1708C21.4564 28.1112 22.3459 27.6804 23.1574 27.972C23.5989 28.131 23.9495 28.4889 24.1053 28.9396H29.3899C29.6756 28.9396 29.9093 28.701 29.9093 28.4094V26.8188H0.824097L0.824215 28.4094Z"
                                    fill="black" />
                                <path
                                    d="M8.09564 29.4699C8.09564 29.7627 7.86308 30.0001 7.57626 30.0001C7.28945 30.0001 7.05688 29.7627 7.05688 29.4699C7.05688 29.1771 7.28945 28.9397 7.57626 28.9397C7.86308 28.9397 8.09564 29.1771 8.09564 29.4699Z"
                                    fill="black" />
                                <path
                                    d="M23.1577 29.4699C23.1577 29.7627 22.9251 30.0001 22.6383 30.0001C22.3515 30.0001 22.1189 29.7627 22.1189 29.4699C22.1189 29.1771 22.3515 28.9397 22.6383 28.9397C22.9251 28.9397 23.1577 29.1771 23.1577 29.4699Z"
                                    fill="black" />
                                <path d="M14.8476 18.3359H11.7313V19.9265H10.6926V18.3359H9.65381V21.517H14.8476V18.3359Z"
                                    fill="black" />
                                <path d="M14.8476 22.5774H11.7313V24.1679H10.6926V22.5774H9.65381V25.7585H14.8476V22.5774Z"
                                    fill="black" />
                                <path d="M3.26636 14.3436L10.5406 11.999L10.8534 13.0102L3.57914 15.3548L3.26636 14.3436Z"
                                    fill="black" />
                                <path
                                    d="M0.667603 15.1797L2.22782 14.6768L2.5406 15.6879L0.980387 16.1909L0.667603 15.1797Z"
                                    fill="black" />
                                <path
                                    d="M12.8543 5.32025L16.6068 4.18039L11.6922 0.416095C11.6013 0.349819 11.4909 0.310059 11.3805 0.310059H10.5495C10.2639 0.310059 10.0302 0.54864 10.0302 0.84024C10.0302 0.946277 10.0626 1.04568 10.1146 1.13184L12.8543 5.32025Z"
                                    fill="black" />
                                <path
                                    d="M1.77231 7.20223C1.48665 7.20223 1.25293 7.44081 1.25293 7.73241C1.25293 7.87159 1.30487 8.01076 1.40225 8.11017L4.38218 11.1521C4.51852 11.2913 4.71328 11.3443 4.90156 11.2846L12.6661 8.95843L12.7765 8.18964L13.8023 8.34206L12.9323 14.5516C12.8934 14.8432 13.0881 15.1082 13.3738 15.1546C13.3997 15.1613 13.4257 15.1613 13.4452 15.1613H14.1334C14.3476 15.1613 14.5424 15.0287 14.6203 14.8233L17.9963 5.95621L18.9636 6.34059L18.7299 6.95693L25.0859 5.06155C25.3261 4.98202 25.456 4.72356 25.3845 4.47835C25.3651 4.40545 25.3261 4.33918 25.2742 4.28616C24.5146 3.51076 23.4044 3.22579 22.3787 3.5373L17.6523 4.96879L17.6458 4.97542L17.6393 4.96879L5.71972 8.5939C5.17437 8.75958 4.57709 8.60715 4.17458 8.19626L3.35658 7.35458C3.25919 7.25517 3.12935 7.20215 2.98652 7.20215L1.77231 7.20223Z"
                                    fill="black" />
                                <path d="M3.78088 2.56529L7.41493 1.39392L7.72772 2.40508L4.09367 3.57645L3.78088 2.56529Z"
                                    fill="black" />
                                <path d="M1.18579 3.40262L2.74601 2.89966L3.05879 3.91082L1.49858 4.41378L1.18579 3.40262Z"
                                    fill="black" />
                                <path d="M21.4427 9.04299L25.4236 7.75989L25.7364 8.77105L21.7555 10.0542L21.4427 9.04299Z"
                                    fill="black" />
                                <path d="M18.8446 9.87857L20.4048 9.37561L20.7176 10.3868L19.1574 10.8897L18.8446 9.87857Z"
                                    fill="black" />
                                <path d="M28.1941 5.97089L29.2342 5.63574L29.547 6.64691L28.5069 6.98205L28.1941 5.97089Z"
                                    fill="black" />
                                <path
                                    d="M17.8142 15.1749L18.1128 16.1956L29.0263 12.8024L28.3901 14.4261L29.351 14.8237L30.5845 11.6758L27.5071 10.4232L27.1176 11.4041L28.3446 11.9078L17.8142 15.1749Z"
                                    fill="black" />
                            </svg>
                        </span>
                        {{ __('strings.export') }}
                    </h4>
                </div>

                <form action="{{ route('marketing.filter') }}" class="market_filter">
                    <div class="market_select">
                        <label>
                            {{ __('strings.from') }}
                        </label>
                        <div class="custom-select">
                            <select name="from">
                                @if (isset($filter['from']))
                                    <option value="{{$filter['from']}}" selected="selected">{{ $filter['from'] }}</option>
                                @endif
                                <option value="">{{ __('strings.not selected') }}</option>
                                @foreach ($locations['from'] as $item)
                                    <option value="{{ $item->location_from }}">{{ $item->location_from }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="market_select">
                        <label>
                            {{ __('strings.to') }}
                        </label>
                        <div class="custom-select">
                            <select name="to">
                                @if (isset($filter['to']))
                                    <option value="{{$filter['to']}}" selected="selected">{{ $filter['to'] }}</option>
                                @endif
                                
                                <option value="">{{ __('strings.not selected') }}</option>
                                @foreach ($locations['to'] as $item)
                                    <option value="{{ $item->location_to }}">{{ $item->location_to }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="market_select">
                        <label>
                            {{ __('strings.year') }}
                        </label>
                        <div class="custom-select">
                            <select name="year">
                                @if (isset($filter['year']))
                                    <option value="{{$filter['year']}}" selected="selected">{{ $filter['year'] }}</option>
                                @endif
                                
                                <option value="">{{ __('strings.not selected') }}</option>
                                <?php
                                $period = Carbon\CarbonPeriod::create('2017-01-01', '1 year', Carbon\Carbon::now()->format('Y-m-d'));
                                ?>
                                @foreach ($period as $date)
                                    <option value="{{ $date->year }}">{{ $date->year }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="market_btn">{{ __('strings.search') }}</button>
                </form>

                <div class="market_info tabItem active" id="import">
                    <div class="market_info-table">
                        <h2 class="market_info-header">
                            {{ __('strings.products') }}
                        </h2>

                        <div class="market_info-body">

                            @foreach ($marketing->where('type', 'import') as $item)
                                <div class="market_info-row">
                                    <div class="market_info-photo">
                                        <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="product-photo">
                                    </div>

                                    <p class="market_info-txt">
                                        {{ $item->description }}
                                    </p>

                                    <div class="market_info-group">
                                        <p>From: {{ $item->location_from }}</p>
                                        <p>To: {{ $item->location_to }}</p>
                                        <p>{{ $item->amount }}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="market_info tabItem" id="export">
                    <div class="market_info-table">
                        <h2 class="market_info-header">
                            Products
                        </h2>

                        <div class="market_info-body">
                            @foreach ($marketing->where('type', 'export') as $item)
                                <div class="market_info-row">
                                    <div class="market_info-photo">
                                        <img src="{{ env('APP_URL') }}/{{ $item->image }}" alt="product-photo">
                                    </div>

                                    <p class="market_info-txt">
                                        {{ $item->description }}
                                    </p>

                                    <div class="market_info-group">
                                        <p>From: {{ $item->location_from }}</p>
                                        <p>To: {{ $item->location_to }}</p>
                                        <p>{{ $item->amount }}</p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Marketing end ==================== -->

    <!-- =========================
                                Google Map
                            =========================  -->
    <section id="googleMap" class="google-map p-0">
        <div id="map"><iframe
                src="https://yandex.com/map-widget/v1/?um=constructor%3A74553a0424c44ff7de68fb514bb294ca5bbf25c439c2bc8cc04f65f26d3f2c66&amp;source=constructor"
                width="100%" height="100%" frameborder="0"></iframe></div>
    </section>
    <!-- /.GoogleMap -->
@endsection
