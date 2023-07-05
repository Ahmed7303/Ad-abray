<footer id="footer" class="footer footer-1">
   
    <div class="container">
    <div class="footer-bottom">
        <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-9">
            <div class="footer__copyright">
            <span>&copy; 2013-{{\Carbon\Carbon::now()->format('Y')}}. At-Abraý Group. Logistic Solutions</span>
            </div><!-- /.Footer-copyright -->
        </div><!-- /.col-lg-6 -->
        <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center">
            <div class="social__icons justify-content-end w-100">
                <?php $links = \App\Models\ContactLink::orderBy("created_at")->get();?>

                @if(count($links) > 0)
                    @foreach($links as $item)
                        <a href="{{$item->link}}"><img src="{{$item->image}}" alt="icon"></a>
                    @endforeach
                @endif
            {{-- <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a> --}}
            </div><!-- /.social-icons -->
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.Footer-bottom -->
    </div><!-- /.container -->
</footer><!-- /.Footer -->