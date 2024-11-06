<!DOCTYPE html>
<html>
<head>
    <title>Laravel PDF Example</title>
    <style>
        body {
            font-family: 'Arial, sans-serif';
        }
        .container {
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            font-size: 12px;
        }
    </style>
</head>


<table class="bordered" style="table-layout: fixed"> <!-- only added this -->
    <tr class="font-12">
        <th style="width: 25px">No</th>
        <th style="width: 100px">Nama Alat</th>
        <th style="width: 25px">Jml</th>
        <th style="width: 300px">Spesifikasi</th>
        <th style="width: 300px">Supplier</th>
        <th style="width: 150px">Gambar</th>
    </tr>
    @foreach ($employees as $index => $item)
    <tr>
        <td style="width: 25px">{{ ($index+1) }}</td>
        <td style="width: 100px">{{ $item['first_name'] }}</td>
        <td style="width: 25px">{{ $item['last_name'] }}</td>
        <td class="font-12" style="width: 300px; word-break:break-all; word-wrap:break-word;">
            {!! nl2br( $item['spesifikasi'] ) !!}
        </td>
        <td class="font-12" style="width: 300px; word-break:break-all; word-wrap:break-word;">
            {!! nl2br( $item['supplier'] ) !!}
        </td>
        <td style="width: 150px">
            @if ($item['image'])
                <img style="max-height: 125px;" src="{{ $item['image'] }}" />
            @else
                -
            @endif
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>