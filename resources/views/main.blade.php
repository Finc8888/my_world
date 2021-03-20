@extends('layout')


@section('main')
    <!-- Main -->
        <div class="clock">
            <div class="date">
                <div class="dt" id="dt"></div>
            </div>
            <div class="hour">
                <div class="hr" id="hr"></div>
            </div>
            <span> : </span>
            <div class="min">
                <div class="mn" id="mn">
                </div>

            </div>
            <span> : </span>
            <div class="sec">
                <div class="sc" id="sc"></div>
            </div>
        </div>
@endsection

@section('footer')
    <!-- Footer -->
    <div id="footer" class="container">
        <div>
            <div class="title">
                <h2>Сторонние модули</h2>
                <span class="byline">Ссылки на другие приложения</span> </div>
            <ul class="contact">
                <li><a href="https://finc8888.github.io/" class="icon icon-twitter" target="_blank"><span>Twitter</span></a></li>
                <li><a href="https://taskassistant.herokuapp.com/" class="icon icon-facebook" target="_blank"><span></span></a></li>
                <li><a href="http://memonumbers.herokuapp.com/" class="icon icon-facebook" target="_blank"><span>Pinterest</span></a></li>
                <li><a href="http://memonumbers.herokuapp.com/dokuwiki/doku.php" class="icon icon-facebook" target="_blank"><span>Google+</span></a></li>
                <li><a href="https://career.habr.com/vacancies/1000070923" class="icon icon-rss" target="_blank"><span>Работа</span></a></li>
            </ul>
        </div>
    </div>
@endsection
    <script src="{{url("")}}/js/widgets/clock.js"></script>
