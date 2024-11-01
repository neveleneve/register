<div class="col-md-{{ $col ?? '12' }} {{ $class ?? null }}">
    <ol class="breadcrumb font-weight-bold {{ $float ?? null }}">
        @for ($i = 0; $i < count($data); $i++)
            <li class="breadcrumb-item {{ count($data) == $i + 1 ? 'active' : null }}">
                {{ $data[$i] }}
            </li>
        @endfor
    </ol>
</div>
