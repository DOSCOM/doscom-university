{{ $peserta->id }}

@if($peserta->kelass->count() > 0)
    ada
    <ul>
        @foreach($peserta->kelass as $item)
            <li>
                {{ $item->nama_kelas }}
            </li>
            @endforeach
    </ul>
    @endif

{{$kelas->id}}
@if($kelas->pesertass->count() > 0)
    ada
    <ul>
        @foreach($kelas->pesertass as $item)
        <li>
            {{ $item->nama }}
        </li>
        @endforeach
    </ul>
@endif