<style>
    .page-break {
      page-break-before: always;
    }
  </style>
<div class="page-break"></div>

<table style="width: 100%; border-collapse: collapse;">
  <tr>
    <td style="background-color: black; color: #fff; text-align: center; border: solid black 1pt;" colspan="4"><b>Foto Equipment</b></td>
  </tr>
  <tr style="height: 11pt">
    <td style="width: 5%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 9pt;">No</p>
    </td>
    <td style="width: 70%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 9pt;">Gambar</p>
    </td>
    <td style="width: 15%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 9pt;">Info</p>
    </td>
    <td style="width: 10%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 9pt;">Keterangan</p>
    </td>
  </tr>
  @php
  $no = 1;
  @endphp
  @foreach($gambar as $g1)
  <tr style="height: 11pt">
    <td style="width: 5%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 12pt; font-family: 'Times New Roman', serif;">{{$no++}}</p>
    </td>
    <td style="width: 70%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0;">
        <img width="100" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/') . $g1->gambar)) }}" />
      </p>
    </td>
    <td style="width: 15%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 12pt; font-family: 'Times New Roman', serif;">{{$g1->info}}</p>
    </td>
    <td style="width: 10%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 12pt; font-family: 'Times New Roman', serif;">{{$g1->keterangan}}</p>
    </td>
  </tr>
  @endforeach
</table>

<table style="width: 100%; border-collapse: collapse;">
  <tr>
    <td style="background-color: black; color: #fff; text-align: center; border: solid black 1pt;" colspan="4"><b>Foto Parameter</b></td>
  </tr>
  <tr style="height: 11pt">
    <td style="width: 5%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 9pt;">No</p>
    </td>
    <td style="width: 70%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 9pt;">Gambar</p>
    </td>
    <td style="width: 15%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 9pt;">Info</p>
    </td>
    <td style="width: 10%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 9pt;">Keterangan</p>
    </td>
  </tr>
  @php
  $no = 1;
  @endphp
  @foreach($gambar2 as $g2)
  <tr style="height: 11pt">
    <td style="width: 5%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 12pt; font-family: 'Times New Roman', serif;">{{$no++}}</p>
    </td>
    <td style="width: 70%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0;">
        <img width="100" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/') . $g2->gambar)) }}" />
      </p>
    </td>
    <td style="width: 15%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 12pt; font-family: 'Times New Roman', serif;">{{$g2->info}}</p>
    </td>
    <td style="width: 10%; border: solid black 1pt; padding: 5px; text-align: center;">
      <p class="TableParagraph" style="margin: 0; font-size: 12pt; font-family: 'Times New Roman', serif;">{{$g2->keterangan}}</p>
    </td>
  </tr>
  @endforeach