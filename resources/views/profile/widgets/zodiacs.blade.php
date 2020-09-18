<div class="panel panel-default">
    <div class="panel-heading">Знаки зодиака</div>

    <ul class="list-group list-group-zodiac">
        <a href="{{ route('search', ['zodiac' => 'Овен', 's' => 'Овен']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/006-aries.png') }}">
                <span>Овен</span>
            </div>
            <div class="pull-right">
                <span class="red">21.03 - 20.04</span>
            </div>
        </a>
        <a href="{{ route('search', ['zodiac' => 'Телец', 's' => 'Телец']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/007-taurus.png') }}">
                <span>Телец</span>
            </div>
            <div class="pull-right">
                <span class="red">21.04 - 20.05</span>
            </div>
        </a>
        <a href="{{ route('search', ['zodiac' => 'Близнецы', 's' => 'Близнецы']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/003-gemini.png') }}">
                <span>Близнецы</span>
            </div>
            <div class="pull-right">
                <span class="red">21.05 - 21.06</span>
            </div>
        </a>
        <a href="{{ route('search', ['zodiac' => 'Рак', 's' => 'Рак']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/005-cancer.png') }}">
                <span>Рак</span>
            </div>
            <div class="pull-right">
                <span class="red">22.06 - 21.07</span>
            </div>
        </a>
        <a href="{{ route('search', ['zodiac' => 'Лев', 's' => 'Лев']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/012-leo.png') }}">
                <span>Лев</span>
            </div>
            <div class="pull-right">
                <span class="red">22.07 - 22.08</span>
            </div>
        </a>
        <a href="{{ route('search', ['zodiac' => 'Дева', 's' => 'Дева']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/001-virgo.png') }}">
                <span>Дева</span>
            </div>
            <div class="pull-right">
                <span class="red">23.08 - 22.09</span>
            </div>
        </a>
        <a href="{{ route('search', ['zodiac' => 'Весы', 's' => 'Весы']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/009-libra.png') }}">
                <span>Весы</span>
            </div>
            <div class="pull-right">
                <span class="red">23.09 - 22.10</span>
            </div>
        </a>
        <a href="{{ route('search', ['zodiac' => 'Скорпион', 's' => 'Скорпион']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/008-scorpio.png') }}">
                <span>Скорпион</span>
            </div>
            <div class="pull-right">
                <span class="red">23.10 - 21.11</span>
            </div>
        </a>
        <a href="{{ route('search', ['zodiac' => 'Стрелец', 's' => 'Стрелец']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/010-sagittarius.png') }}">
                <span>Стрелец</span>
            </div>
            <div class="pull-right">
                <span class="red">22.11 - 21.12</span>
            </div>
        </a>
        <a href="{{ route('search', ['zodiac' => 'Козерег', 's' => 'Козерог']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/004-capricorn.png') }}">
                <span>Козерог</span>
            </div>
            <div class="pull-right">
                <span class="red">22.12 - 20.01</span>
            </div>
        </a>
        <a href="{{ route('search', ['zodiac' => 'Водолей', 's' => 'Водолей']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/002-aquarius.png') }}">
                <span>Водолей</span>
            </div>
            <div class="pull-right">
                <span class="red">21.01 - 20.02</span>
            </div>
        </a>
        <a href="{{ route('search', ['zodiac' => 'Рыбы', 's' => 'Рыбы']) }}"  class="list-group-item">
            <div class="pull-left">
                <img class="zodiac-ico" src="{{ asset('images/zodiacs/011-pisces.png') }}">
                <span>Рыбы</span>
            </div>
            <div class="pull-right">
                <span class="red">21.02 - 20.03</span>
            </div>
        </a>
    </ul>
</div>

<div class="panel panel-default" style="margin-top: 30px">
    <div class="panel-heading">Года</div>

    <ul class="list-group list-group-zodiac list-group-year">
        <a href="{{ route('search', ['year' => '1960,1972,1984,1996,2008', 's' => 'Крыса']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Крыса</span>
            </div>
            <div class="pull-right">
                <span class="red">1960, 1972, 1984, 1996, 2008</span>
            </div>
        </a>
        <a href="{{ route('search', ['year' => '1961,1973,1985,1997,2009', 's' => 'Бык']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Бык</span>
            </div>
            <div class="pull-right">
                <span class="red">1961, 1973, 1985, 1997, 2009</span>
            </div>
        </a>
        <a href="{{ route('search', ['year' => '1962,1974,1986,1998,2010', 's' => 'Тигр']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Тигр</span>
            </div>
            <div class="pull-right">
                <span class="red">1962, 1974, 1986, 1998, 2010</span>
            </div>
        </a>
        <a href="{{ route('search', ['year' => '1963,1975,1987,1999,2011', 's' => 'Кролик']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Кролик</span>
            </div>
            <div class="pull-right">
                <span class="red">1963, 1975, 1987, 1999, 2011</span>
            </div>
        </a>
        <a href="{{ route('search', ['year' => '1964,1976,1988,2000,2012', 's' => 'Дракон']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Дракон</span>
            </div>
            <div class="pull-right">
                <span class="red">1964, 1976, 1988, 2000, 2012</span>
            </div>
        </a>
        <a href="{{ route('search', ['year' => '1965,1977,1989,2001,2013', 's' => 'Змея']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Змея</span>
            </div>
            <div class="pull-right">
                <span class="red">1965, 1977, 1989, 2001, 2013</span>
            </div>
        </a>
        <a href="{{ route('search', ['year' => '1966,1978,1990,2002,2014', 's' => 'Лошадь']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Лошадь</span>
            </div>
            <div class="pull-right">
                <span class="red">1966, 1978, 1990, 2002, 2014</span>
            </div>
        </a>
        <a href="{{ route('search', ['year' => '1967,1979,1991,2003,2015', 's' => 'Коза']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Коза</span>
            </div>
            <div class="pull-right">
                <span class="red">1967, 1979, 1991, 2003, 2015</span>
            </div>
        </a>
        <a href="{{ route('search', ['year' => '1968,1980,1992,2004,2016', 's' => 'Обезьяна']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Обезьяна</span>
            </div>
            <div class="pull-right">
                <span class="red">1968, 1980, 1992, 2004, 2016</span>
            </div>
        </a>
        <a href="{{ route('search', ['year' => '1969,1981,1993,2005,2017', 's' => 'Петух']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Петух</span>
            </div>
            <div class="pull-right">
                <span class="red">1969, 1981, 1993, 2005, 2017</span>
            </div>
        </a>
        <a href="{{ route('search', ['year' => '1970,1982,1994,2006,2018', 's' => 'Собака']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Собака</span>
            </div>
            <div class="pull-right">
                <span class="red">1970, 1982, 1994, 2006, 2018</span>
            </div>
        </a>
        <a href="{{ route('search', ['year' => '1971,1983,1995,2007,2019', 's' => 'Свинья']) }}"  class="list-group-item">
            <div class="pull-left">
                <span>Свинья</span>
            </div>
            <div class="pull-right">
                <span class="red">1971, 1983, 1995, 2007, 2019</span>
            </div>
        </a>
    </ul>
</div>