
@if ($user->level== 1)
<li>
    <a href="{{url('dosen')}}">
        Data Dosen
    </a>
</li>
<li>
    <a href="{{url('skripsi')}}">
        Data Skripsi
    </a>
</li>

@elseif ($user->level == 2)
<li>
    <a href="{{url('skripsi')}}">
        Beri Nilai
    </a>
</li>
@else
<li>
<a href="{{url('dashboard')}}">
        Lihat Nilai
    </a>
</li>
@endif