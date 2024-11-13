<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="Content-Style-Type" content="text/css" />
      <meta name="generator" content="Aspose.Words for .NET 24.7.0" />
      <title></title>
      <style type="text/css">body { widows:0; orphans:0; font-family:Calibri; font-size:11pt }p { margin:0pt }table { margin-top:0pt; margin-bottom:0pt }.BodyText { margin:0pt; text-align:left; line-height:normal; widows:0; orphans:0; font-family:Calibri; font-size:7.5pt; font-weight:bold; font-style:italic; -aw-style-name:body-text }.ListParagraph { margin:0pt; text-align:left; line-height:normal; widows:0; orphans:0; font-family:Calibri; font-size:11pt; -aw-style-name:list-paragraph }.TableParagraph { margin:0pt; text-align:left; line-height:normal; widows:0; orphans:0; font-family:Calibri; font-size:11pt; -aw-style-name:'Table Paragraph' }.Title { margin:1pt 0pt 0pt 3pt; text-align:left; line-height:normal; widows:0; orphans:0; font-family:'Arial MT'; font-size:8pt; letter-spacing:0pt; color:#000000; -aw-style-name:title }.TableNormal {  }</style>
   </head>
   <body>
      <div>
         <div style="-aw-headerfooter-type:header-primary; clear:both">
            <p class="BodyText" style="line-height:6%; font-size:10pt"><span style="height:0pt; display:block; position:absolute; z-index:-65537"></span><span style="font-weight:normal; font-style:normal; -aw-import:ignore">&#xa0;</span></p>
         </div>
         <table cellspacing="0" cellpadding="0" class="TableNormal" style="margin-left:6.5pt; -aw-border-insideh:1.5pt single #000000; -aw-border-insidev:1.5pt single #000000; border-collapse:collapse">
            <tr style="height:28.85pt">
               <td colspan="7" style="width:413.02pt; border-top-style:solid; border-top-width:1.5pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-right:58.25pt; margin-left:134.05pt; text-align:center; line-height:12.9pt"><span style="font-size:11.5pt; font-weight:bold">SERVICE</span><span style="font-size:11.5pt; font-weight:bold; letter-spacing:0.5pt"> </span><span style="font-size:11.5pt; font-weight:bold">REPORT</span><span style="font-size:11.5pt; font-weight:bold; letter-spacing:0.5pt"> </span><span style="font-size:11.5pt; font-weight:bold">PREVENTIVE</span><span style="font-size:11.5pt; font-weight:bold; letter-spacing:0.5pt"> </span><span style="font-size:11.5pt; font-weight:bold">MAINTENANCE</span></p>
                  <p class="TableParagraph" style="margin-top:0.95pt; margin-right:58.25pt; margin-left:134pt; text-align:center; line-height:14pt"><span style="font-size:11.5pt; font-weight:bold">AIR</span><span style="font-size:11.5pt; font-weight:bold; letter-spacing:0.25pt"> </span><span style="font-size:11.5pt; font-weight:bold">HANDLING</span><span style="font-size:11.5pt; font-weight:bold; letter-spacing:0.35pt"> </span><span style="font-size:11.5pt; font-weight:bold">UNIT</span><span style="font-size:11.5pt; font-weight:bold; letter-spacing:0.3pt"> </span><span style="font-size:11.5pt; font-weight:bold">(AHU)</span></p>
               </td>
               <td style="width:88.42pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt 0.75pt; vertical-align:top; background-color:#f2f2f2">
                  <p class="TableParagraph" style="margin-left:1.4pt; line-height:7.6pt"><span style="font-size:6.5pt">FORM</span><span style="font-size:6.5pt; letter-spacing:0.05pt"> </span><span style="font-size:6.5pt">NO. <br>
                  <?php
                    // Array untuk memetakan angka ke jenis
                    $jenis = [
                      1 => "AC Split",
                      2 => "Cooled Water Chiller",
                      3 => "AHUP",
                      4 => "PAC",
                      5 => "Cold Storage",
                      6 => "Cooling Unit & AC Panel",
                      7 => "Mini Chiller",
                      8 => "Evaporative Air Cooler",
                      9 => "AHU",
                      10 => "Cooling tower",
                      11 => "Humidifier",
                      12 => "Dehumidifier",
                      13 => "FCU (Fan Cooling Unit)",
                      14 => "Exhaust Fan",
                      15 => "Pompa",
                      16 => "Spot Cooling",
                      17 => "Water Mist",
                      18 => "Chiller Centrifugal",
                      19 => "Floor Standing",
                      20 => "Ac Cassette",
                      21 => "Split Duct",
                      22 => "Air Cooled Chiller",
                      23 => "Centralize Chiller",
                      24 => "Ultrasonic Humidifier",
                      25 => "Piping & Accs",
                      26 => "Panel SCR",
                      27 => "ATCS",
                      28 => "Lakos Filter"
                    ];
                    // Ambil singkatan dari jenis berdasarkan angka
                    $singkatan1 = isset($jenis[$equipment->jenis]) ? substr(str_replace(' ', '', ucwords(strtolower($jenis[$equipment->jenis]))), 0, 3) : '';
                    $singkatan2 = strtoupper($history->type);
                    $bulan = strtoupper($history->created_at->format('m'));
                    $tahun = strtoupper($history->created_at->format('y'));
                    // Mengambil karakter terakhir
                    echo strtoupper($singkatan1 .'-'. $singkatan2 .'-'. $bulan .'-'.$tahun.'-'.$formattedId = sprintf('%05d', $equipment->id));
                    // Mengambil karakter pertama


                    ?></span></p>
               </td>
            </tr>
            <tr style="height:11.8pt">
               <td colspan="8" style="width:502.2pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:1.1pt; text-align:right; font-size:7.5pt"><span style="font-weight:bold">Tipe</span><span style="font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-weight:bold">Form</span><span style="font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-weight:bold">PM09</span></p>
               </td>
            </tr>
            <tr style="height:10.7pt">
               <td colspan="2" style="width:112.42pt; border-style:solid; border-width:1.5pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.4pt; line-height:9.55pt"><span style="font-size:8pt">Lokasi</span><span style="width:19.73pt; font-size:8pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:41.15pt">&#xa0;</span><span style="font-size:8pt">: {{$equipment->room}}</span></p>
               </td>
               <td style="width:121.05pt; border-style:solid; border-width:1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.75pt; line-height:9.55pt"><span style="font-size:8pt">Model</span><span style="font-size:8pt; letter-spacing:-0.25pt"> </span><span style="font-size:8pt">Unit</span><span style="font-size:8pt; letter-spacing:-0.25pt"> </span><span style="font-size:8pt">: </span></p>
               </td>
               <td colspan="3" rowspan="3" style="width:138.65pt; border-top-style:solid; border-top-width:1.5pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt">Team</span><span style="font-size:8pt; letter-spacing:-0.4pt"> </span><span style="font-size:8pt">Engineer</span><span style="font-size:8pt; letter-spacing:-0.4pt"> </span><span style="font-size:8pt">List</span><span style="font-size:8pt; letter-spacing:-0.35pt"> </span><span style="font-size:8pt">: {{$ahu->enginer_list}}</span></p>
               </td>
               <td colspan="2" style="width:127.82pt; border-style:solid; border-width:1.5pt 1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.65pt; line-height:9.55pt"><span style="font-size:8pt">Date</span><span style="width:17.64pt; font-size:8pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:34.7pt">&#xa0;</span><span style="font-size:8pt">:{{$ahu->tanggal}}</span></p>
               </td>
            </tr>
            <tr style="height:10.6pt">
               <td colspan="2" style="width:112.42pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.4pt; line-height:9.6pt"><span style="font-size:8pt">Code</span><span style="font-size:8pt; letter-spacing:-0.2pt"> </span><span style="font-size:8pt">unit </span><span style="font-size:8pt; letter-spacing:1.45pt; -aw-import:spaces">&#xa0;</span><span style="font-size:8pt">: {{$equipment->kode}}</span></p>
               </td>
               <td style="width:121.05pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.75pt; line-height:9.6pt"><span style="font-size:8pt">No.</span><span style="font-size:8pt; letter-spacing:-0.25pt"> </span><span style="font-size:8pt">Seri</span><span style="width:14.31pt; font-size:8pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:41.55pt">&#xa0;</span><span style="font-size:8pt">: {{$equipment->serial_number}}</span></p>
               </td>
               <td colspan="2" style="width:127.82pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.65pt; line-height:9.6pt"><span style="font-size:8pt">Start</span><span style="font-size:8pt; letter-spacing:-0.15pt"> </span><span style="font-size:8pt">PM</span><span style="font-size:8pt; letter-spacing:1.6pt"> </span><span style="font-size:8pt">: {{$ahu->start}}</span></p>
               </td>
            </tr>
            <tr style="height:11.1pt">
               <td colspan="2" style="width:112.42pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.15pt; margin-left:1.4pt; font-size:8pt"><span>Nomor</span><span style="letter-spacing:-0.3pt"> </span><span>Unit</span><span style="letter-spacing:-0.25pt"> </span><span>:</span></p>
               </td>
               <td style="width:121.05pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.15pt; margin-left:1.75pt; font-size:8pt"><span>Periode</span><span style="width:14.16pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:41.05pt">&#xa0;</span><span>:</span></p>
               </td>
               <td colspan="2" style="width:127.82pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.15pt; margin-left:1.65pt; font-size:8pt"><span>Close</span><span style="letter-spacing:-0.25pt"> </span><span>PM</span><span style="letter-spacing:-0.15pt"> </span><span>: {{$ahu->end}}</span></p>
               </td>
            </tr>
            <tr style="height:12.6pt">
               <td colspan="8" style="width:503.7pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:2.25pt; line-height:10.45pt"><span style="font-size:9pt; font-weight:bold; color:#ffffff">CHECKLIST</span><span style="font-size:9pt; font-weight:bold; letter-spacing:0.25pt; color:#ffffff"> </span><span style="font-size:9pt; font-weight:bold; color:#ffffff">TEAM</span><span style="font-size:9pt; font-weight:bold; letter-spacing:0.15pt; color:#ffffff"> </span><span style="font-size:9pt; font-weight:bold; color:#ffffff">BRIEFING</span></p>
               </td>
            </tr>
            <tr style="height:16.9pt">
               <td colspan="8" style="width:502.2pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.4pt; line-height:10.7pt"><span style="font-size:8pt; font-weight:bold">INTENSIVE</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.4pt"> </span><span style="font-size:8pt; font-weight:bold">SAFETY</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">BRIEFING</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">TEAM</span><span style="width:207.42pt; font-size:8pt; font-weight:bold; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:324.55pt">&#xa0;</span><span style="font-size:9pt">⃝</span><span style="font-size:9pt; letter-spacing:0.75pt"> </span><span style="font-size:8pt">OK</span><span style="width:58.26pt; font-size:8pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:403.25pt">&#xa0;</span><span style="font-size:9pt">⃝</span><span style="font-size:9pt; letter-spacing:0.65pt"> </span><span style="font-size:8pt">NOT</span><span style="font-size:8pt; letter-spacing:-0.1pt"> </span><span style="font-size:8pt">OK</span></p>
               </td>
            </tr>
            <tr style="height:12.45pt">
               <td style="width:14.9pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-right:3.5pt; text-align:right; line-height:10.7pt"><span style="font-size:9pt; font-weight:bold; color:#ffffff">A</span></p>
               </td>
               <td colspan="6" style="width:399.25pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-left:2.25pt; font-size:9pt"><span style="font-weight:bold; color:#ffffff">Filter</span><span style="font-weight:bold; letter-spacing:0.15pt; color:#ffffff"> </span><span style="font-weight:bold; color:#ffffff">AHU</span></p>
               </td>
               <td style="width:89.55pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; color:#ffffff; -aw-import:ignore">&#xa0;</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td rowspan="8" style="width:13.78pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; border-bottom:0.75pt solid #ffffff; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="2" rowspan="2" style="width:219.7pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:84.3pt; margin-left:86.05pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Item</span><span style="font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:56.5pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:13.25pt; font-size:8pt"><span style="font-weight:bold">Standart</span></p>
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:12.3pt; font-size:8pt"><span style="font-weight:bold">Condition</span></p>
               </td>
               <td rowspan="2" style="width:42pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:12.05pt; font-size:8pt"><span style="font-weight:bold">Freq.</span></p>
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:7.7pt; font-size:8pt"><span style="font-weight:bold">(month)</span></p>
               </td>
               <td colspan="2" style="width:78.05pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-left:13.45pt; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">Actual</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:88.8pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:28.95pt; margin-left:30.75pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Remark</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-right:5.75pt; margin-left:7.55pt; text-align:center; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">Before</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-right:5.75pt; margin-left:7.5pt; text-align:center; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">After</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">1.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Pressure</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Different</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">in/out</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">PreFilter</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.55pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">30-100</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:7.5pt; font-weight:bold">pa</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q1);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q1);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q1);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">2.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Pressure</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Different</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">in/out</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">BagFilter</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">(Pocket</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Filter)</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.55pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">70-225</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:7.5pt; font-weight:bold">pa</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q2);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q2);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q2);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">3.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Cleaning</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">Pre</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Filter</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.45pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q3);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q3);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q3);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">4.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Cleaning</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">Bag</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">Filter</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.45pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q4);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q4);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q4);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">5.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Replace</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Pre</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Filter</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.6pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:7.5pt; font-weight:bold">Month</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q5);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q5);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q5);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">6.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Replace</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Bag</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">Filter</span></p>
               </td>
               <td style="width:56.5pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:3.45pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">248</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:7.5pt; font-weight:bold">pa</span></p>
               </td>
               <td style="width:42pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q6);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q6);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q6);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td style="width:14.52pt; border-top:0.75pt solid #ffffff; border-right:0.75pt solid #ffffff; border-bottom:0.75pt solid #ffffff; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:0.05pt; margin-right:3.4pt; text-align:right; line-height:9.95pt"><span style="font-size:9pt; font-weight:bold; color:#ffffff">B</span></p>
               </td>
               <td colspan="7" style="width:488.42pt; border-left:0.75pt solid #ffffff; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-left:1.85pt; line-height:10pt"><span style="font-size:9pt; font-weight:bold; color:#ffffff">Cooling</span><span style="font-size:9pt; font-weight:bold; letter-spacing:0.05pt; color:#ffffff"> </span><span style="font-size:9pt; font-weight:bold; color:#ffffff">Coil</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td rowspan="12" style="width:13.78pt; border-top:0.75pt solid #ffffff; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="2" rowspan="2" style="width:219.7pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:84.3pt; margin-left:86.05pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Item</span><span style="font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:56.5pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:13.25pt; font-size:8pt"><span style="font-weight:bold">Standart</span></p>
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:12.3pt; font-size:8pt"><span style="font-weight:bold">Condition</span></p>
               </td>
               <td rowspan="2" style="width:42pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:12.05pt; font-size:8pt"><span style="font-weight:bold">Freq.</span></p>
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:7.7pt; font-size:8pt"><span style="font-weight:bold">(month)</span></p>
               </td>
               <td colspan="2" style="width:78.05pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-left:13.45pt; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">Actual</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:88.8pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:28.95pt; margin-left:30.75pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Remark</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-right:5.75pt; margin-left:7.55pt; text-align:center; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">Before</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-right:5.75pt; margin-left:7.5pt; text-align:center; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">After</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">1.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Pressure</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Different</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">in/out</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Cooling</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Coil</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.75pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">30-100</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:7.5pt; font-weight:bold">pa</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q7);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q7);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q7);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">2.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">temperature</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Cooling</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Coil</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.6pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">10-12°C</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q8);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q8);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q8);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">3.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Temperature</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Water</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">in</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">&amp;</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">out</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Delta</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:7.5pt; font-weight:bold">T</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:7.5pt; font-weight:bold">3-5°C</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q9);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q9);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q9);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">4.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Pressure</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Water</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">in</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">&amp;</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">out</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:7.6pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">D.P</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:7.5pt; font-weight:bold">0,5</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:7.5pt; font-weight:bold">-</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.1pt"> </span><span style="font-size:7.5pt; font-weight:bold">1</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.1pt"> </span><span style="font-size:7.5pt; font-weight:bold">Bar</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
<td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q10);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q10);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q10);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">5.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Manual</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">valve</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Normal</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:16.85pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q11);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q11);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q11);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">6.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Motorize</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Valve</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Normal</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:16.85pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
              <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q12);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q12);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q12);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.75pt"><span style="font-size:8pt; font-weight:bold">7.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Cleaning</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Cooling</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">Coil</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-right:4.6pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:16.85pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
              <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q13);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q13);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q13);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">8.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">air</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">velocity</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-right:4.75pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">2,5</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:7.5pt; font-weight:bold">m/s</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:16.85pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
              <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q14);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q14);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q14);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">9.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Replace</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Snap</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">ring</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Motorize</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">valve</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:7.5pt; font-weight:bold">Month</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q15);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q15);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q15);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.75pt"><span style="font-size:8pt; font-weight:bold">10.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Cleaning</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Strainer</span></p>
               </td>
               <td style="width:56.5pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.6pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.1pt"> </span><span style="font-size:7.5pt; font-weight:bold">M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q16);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q16);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q16);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:12.45pt">
               <td style="width:14.9pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:0.8pt; margin-left:2.25pt; line-height:10.7pt"><span style="font-size:9pt; font-weight:bold; color:#ffffff">C</span></p>
               </td>
               <td colspan="7" style="width:488.8pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-left:2.25pt; font-size:9pt"><span style="font-weight:bold; color:#ffffff">Heating</span><span style="font-weight:bold; letter-spacing:0.15pt; color:#ffffff"> </span><span style="font-weight:bold; color:#ffffff">Coil</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td rowspan="11" style="width:13.78pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="2" rowspan="2" style="width:219.7pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:84.3pt; margin-left:86.05pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Item</span><span style="font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:56.5pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:13.25pt; font-size:8pt"><span style="font-weight:bold">Standart</span></p>
                  <p class="TableParagraph" style="margin-top:1.2pt; margin-left:12.3pt; font-size:8pt"><span style="font-weight:bold">Condition</span></p>
               </td>
               <td rowspan="2" style="width:42pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:12.05pt; font-size:8pt"><span style="font-weight:bold">Freq.</span></p>
                  <p class="TableParagraph" style="margin-top:1.2pt; margin-left:7.7pt; font-size:8pt"><span style="font-weight:bold">(month)</span></p>
               </td>
               <td colspan="2" style="width:78.05pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-left:13.45pt; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">Actual</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:88.8pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:28.95pt; margin-left:30.75pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Remark</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-right:5.75pt; margin-left:7.55pt; text-align:center; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">Before</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-right:5.75pt; margin-left:7.5pt; text-align:center; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">After</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.75pt"><span style="font-size:8pt; font-weight:bold">1.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Pressure</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Different</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">in/out</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Heating</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Coil</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.75pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">30-100</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:7.5pt; font-weight:bold">pa</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q17);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q17);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q17);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">2.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">temperature</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Heating</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Coil</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.6pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">10-12°C</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q18);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q18);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q18);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">3.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Temperature</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Water</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">in</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">&amp;</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">out</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Delta</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:7.5pt; font-weight:bold">T</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:7.5pt; font-weight:bold">3-5°C</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q19);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q19);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q19);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">4.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Pressure</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Water</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">in</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">&amp;</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">out</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:7.6pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">D.P</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:7.5pt; font-weight:bold">0,5</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:7.5pt; font-weight:bold">-</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.1pt"> </span><span style="font-size:7.5pt; font-weight:bold">1</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.1pt"> </span><span style="font-size:7.5pt; font-weight:bold">Bar</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q20);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q20);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q20);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">5.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Manual</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">valve</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Normal</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q21);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q21);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q21);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">6.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Motorize</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Valve</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Normal</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
              <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q22);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q22);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q22);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">7.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Cleaning</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Heating</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Coil</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.6pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
              <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q23);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q23);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q23);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.75pt"><span style="font-size:8pt; font-weight:bold">8.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">air</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">velocity</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.75pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">2,5</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:7.5pt; font-weight:bold">m/s</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q24);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q24);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q24);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.75pt"><span style="font-size:8pt; font-weight:bold">9.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Replace</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Snap</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">ring</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Motorize</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">valve</span></p>
               </td>
               <td style="width:56.5pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:7.5pt; font-weight:bold">Month</span></p>
               </td>
               <td style="width:42pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.85pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q25);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q25);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q25);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:12.45pt">
               <td style="width:14.9pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:1.35pt; margin-right:3.7pt; text-align:right; font-size:8pt"><span style="font-weight:bold; color:#ffffff">D</span></p>
               </td>
               <td colspan="7" style="width:488.8pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-left:2.25pt; font-size:9pt"><span style="font-weight:bold; color:#ffffff">Blower</span><span style="font-weight:bold; letter-spacing:0.2pt; color:#ffffff"> </span><span style="font-weight:bold; color:#ffffff">AHU</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td rowspan="17" style="width:13.78pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="2" rowspan="2" style="width:219.7pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:84.3pt; margin-left:86.05pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Item</span><span style="font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:56.5pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:13.25pt; font-size:8pt"><span style="font-weight:bold">Standart</span></p>
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:12.3pt; font-size:8pt"><span style="font-weight:bold">Condition</span></p>
               </td>
               <td rowspan="2" style="width:42pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:12.05pt; font-size:8pt"><span style="font-weight:bold">Freq.</span></p>
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:7.7pt; font-size:8pt"><span style="font-weight:bold">(month)</span></p>
               </td>
               <td colspan="2" style="width:78.05pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-left:13.45pt; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">Actual</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:88.8pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:28.95pt; margin-left:30.75pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Remark</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-right:5.75pt; margin-left:7.55pt; text-align:center; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">Before</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-right:5.75pt; margin-left:7.5pt; text-align:center; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">After</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">1.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">V-Belt</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Condition</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.45pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Kondisi</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:7.5pt; font-weight:bold">Bagus</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
              <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q26);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q26);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q26);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">2.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">V-Belt</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Tension</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">2,7-4,1</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:7.5pt; font-weight:bold">kgF</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q27);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q27);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q27);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.75pt"><span style="font-size:8pt; font-weight:bold">3.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Dressing</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">V-Belt</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.45pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Kondisi</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:7.5pt; font-weight:bold">Bagus</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
              <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q28);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q28);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q28);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">4.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Replace</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">V-Belt</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.6pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">6</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:7.5pt; font-weight:bold">Month</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">6M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q29);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q29);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q29);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">5.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Abrassion</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">of</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Pulley</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Normal</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">6M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q30);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q30);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q30);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">6.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Allignment</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">of</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Pulley</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.55pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Center</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">6M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q31);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q31);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q31);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">7.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Cover</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">Blower</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.45pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Kondisi</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:7.5pt; font-weight:bold">Bagus</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q32);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q32);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q32);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">8.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">blower</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">condition</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Normal</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q33);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q33);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q33);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">9.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Cleaning</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Blower</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.45pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q34);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q34);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q34);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">10.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Cleaning</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Cover</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Blower</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.45pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q35);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q35);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q35);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">11.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Motor</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Blower</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Normal</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q36);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q36);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q36);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">12.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Cleaning</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Cover</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">motor</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">blower</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.45pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q37);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q37);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q37);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.75pt"><span style="font-size:8pt; font-weight:bold">13.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.4pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.4pt"> </span><span style="font-size:8pt; font-weight:bold">Temperature</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Motor</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">blower</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.45pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">40-60°C</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
              <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q38);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q38);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q38);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">14.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Greasing</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Bearing</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Motor</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Blower</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">&amp;</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Pillow</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">block</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Bearing</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.75pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
              <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q39);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q39);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q39);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="2" style="width:219.7pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">15.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.4pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Insulation</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Motor</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Blower</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.9pt; margin-left:6.5pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">&gt;50MΩ</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:14.8pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">12M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q40);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q40);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q40);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:0pt">
               <td style="width:14.9pt"></td>
               <td style="width:98.65pt"></td>
               <td style="width:121.8pt"></td>
               <td style="width:57.25pt"></td>
               <td style="width:42.75pt"></td>
               <td style="width:39.4pt"></td>
               <td style="width:39.4pt"></td>
               <td style="width:89.55pt"></td>
            </tr>
         </table>
         <p style="font-size:1pt"><span style="width:113pt; height:41pt; display:block"><span style="height:0pt; display:block; position:absolute; z-index:-1"></span></span></p>
      </div>
      <br style="page-break-before:always; clear:both; mso-break-type:section-break" />
      <div>
         <div style="-aw-headerfooter-type:linked; clear:both">
            <p class="BodyText" style="line-height:6%; font-size:10pt"><span style="height:0pt; display:block; position:absolute; z-index:-65537"></span><span style="font-weight:normal; font-style:normal; -aw-import:ignore">&#xa0;</span></p>
         </div>
         <br>
         <br>
         <br>
         <table cellspacing="0" cellpadding="0" class="TableNormal" style="margin-left:7.25pt; -aw-border-insideh:1.5pt single #000000; -aw-border-insidev:1.5pt single #000000; border-collapse:collapse">
            <tr style="height:12.45pt">
               <td style="width:14.9pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:1.35pt; margin-right:4.25pt; text-align:right; font-size:8pt"><span style="font-weight:bold; color:#ffffff">E</span></p>
               </td>
               <td colspan="8" style="width:488.85pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-left:2.25pt; font-size:9pt"><span style="font-weight:bold; color:#ffffff">Drain</span><span style="font-weight:bold; letter-spacing:0.2pt; color:#ffffff"> </span><span style="font-weight:bold; color:#ffffff">System</span></p>
               </td>
            </tr>
            <tr style="height:10.6pt">
               <td rowspan="7" style="width:13.78pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="3" rowspan="2" style="width:219.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:84.35pt; margin-left:86.05pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Item</span><span style="font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:56.5pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:13.2pt; font-size:8pt"><span style="font-weight:bold">Standart</span></p>
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:12.25pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">Condition</span></p>
               </td>
               <td rowspan="2" style="width:42pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:12pt; font-size:8pt"><span style="font-weight:bold">Freq.</span></p>
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:7.65pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">(month)</span></p>
               </td>
               <td colspan="2" style="width:78.05pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-left:13.4pt; line-height:9.25pt"><span style="font-size:8pt; font-weight:bold">Actual</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:88.8pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:29pt; margin-left:30.7pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Remark</span></p>
               </td>
            </tr>
            <tr style="height:10.25pt">
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-right:6.8pt; text-align:right; line-height:9.25pt"><span style="font-size:8pt; font-weight:bold">Before</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-right:5.75pt; margin-left:7.4pt; text-align:center; line-height:9.25pt"><span style="font-size:8pt; font-weight:bold">After</span></p>
               </td>
            </tr>
            <tr style="height:10.25pt">
               <td colspan="3" style="width:219.75pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.75pt; line-height:9.25pt"><span style="font-size:8pt; font-weight:bold">1.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Basin</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.5pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:8.75pt"><span style="font-size:7.5pt; font-weight:bold">Kondisi</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:7.5pt; font-weight:bold">Bagus</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.5pt; margin-left:16.8pt; line-height:8.75pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q41);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q41);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q41);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:10.25pt">
               <td colspan="3" style="width:219.75pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.75pt; line-height:9.25pt"><span style="font-size:8pt; font-weight:bold">2.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Cleaning</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Basin</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.5pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:8.75pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.5pt; margin-left:16.8pt; line-height:8.75pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
              <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q42);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q42);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q42);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:10.25pt">
               <td colspan="3" style="width:219.75pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.75pt; line-height:9.25pt"><span style="font-size:8pt; font-weight:bold">3.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">U-Trap</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.5pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:8.75pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.5pt; margin-left:16.8pt; line-height:8.75pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q43);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q43);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q43);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:10.25pt">
               <td colspan="3" style="width:219.75pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.75pt; line-height:9.25pt"><span style="font-size:8pt; font-weight:bold">4.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Piping</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.5pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:8.75pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.5pt; margin-left:16.8pt; line-height:8.75pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q44);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q44);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q44);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:10.35pt">
               <td colspan="3" style="width:219.75pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.15pt; margin-left:1.75pt; line-height:9.25pt"><span style="font-size:8pt; font-weight:bold">5.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Cleaning</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">Piping</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:16.8pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">1M</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q45);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q45);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q45);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11.7pt">
               <td style="width:14.9pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:0.6pt; margin-right:4.25pt; text-align:right; font-size:8pt"><span style="font-weight:bold; color:#ffffff">E</span></p>
               </td>
               <td colspan="8" style="width:488.85pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-left:2.25pt; line-height:10.65pt"><span style="font-size:9pt; font-weight:bold; color:#ffffff">Control</span><span style="font-size:9pt; font-weight:bold; letter-spacing:0.05pt; color:#ffffff"> </span><span style="font-size:9pt; font-weight:bold; color:#ffffff">Panel</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td rowspan="5" style="width:13.78pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="3" rowspan="2" style="width:219.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:84.35pt; margin-left:86.05pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Item</span><span style="font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:56.5pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:13.2pt; font-size:8pt"><span style="font-weight:bold">Standart</span></p>
                  <p class="TableParagraph" style="margin-top:1.2pt; margin-left:12.25pt; font-size:8pt"><span style="font-weight:bold">Condition</span></p>
               </td>
               <td rowspan="2" style="width:42pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.75pt; margin-left:12pt; font-size:8pt"><span style="font-weight:bold">Freq.</span></p>
                  <p class="TableParagraph" style="margin-top:1.2pt; margin-left:7.65pt; font-size:8pt"><span style="font-weight:bold">(month)</span></p>
               </td>
               <td colspan="2" style="width:78.05pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-left:13.4pt; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">Actual</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">Checked</span></p>
               </td>
               <td rowspan="2" style="width:88.8pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:6.15pt; margin-right:29pt; margin-left:30.7pt; text-align:center; font-size:8pt"><span style="font-weight:bold">Remark</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-right:6.8pt; text-align:right; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">Before</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-right:5.75pt; margin-left:7.4pt; text-align:center; line-height:9.6pt"><span style="font-size:8pt; font-weight:bold">After</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="3" style="width:219.75pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.75pt"><span style="font-size:8pt; font-weight:bold">1.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.4pt"> </span><span style="font-size:8pt; font-weight:bold">Inspect</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Panel</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Control</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Component</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">Kondisi</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:7.5pt; font-weight:bold">Bagus</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.8pt; line-height:9.1pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
                <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q47);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q47);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q47);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="3" style="width:219.75pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.3pt; margin-left:1.75pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">2.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">Cleaning</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">Dust</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">in</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">the</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-size:8pt; font-weight:bold">panel</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span style="font-size:8pt; font-weight:bold">box</span></p>
               </td>
               <td style="width:56.5pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Clean</span></p>
               </td>
               <td style="width:42pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.8pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
                <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q48);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q48);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q48);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="3" style="width:219.75pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.25pt; margin-left:1.75pt; line-height:9.75pt"><span style="font-size:8pt; font-weight:bold">3.</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span style="font-size:8pt; font-weight:bold">Check</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">terminal</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-size:8pt; font-weight:bold">tight</span></p>
               </td>
               <td style="width:56.5pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-right:4.7pt; margin-left:6.65pt; text-align:center; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">Kondisi</span><span style="font-size:7.5pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:7.5pt; font-weight:bold">Bagus</span></p>
               </td>
               <td style="width:42pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.85pt; margin-left:16.8pt; line-height:9.15pt"><span style="font-size:7.5pt; font-weight:bold">3M</span></p>
               </td>
                <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q49);
$firstValue = $values[0];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:38.65pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q49);
$firstValue = $values[1];
echo $firstValue;

@endphp</span></p>
               </td>
               <td style="width:88.8pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">@php
                        
$values = explode(',', $ahu->q49);
$firstValue = $values[2];
echo $firstValue;

@endphp</span></p>
               </td>
            </tr>
            <tr style="height:12.45pt">
               <td style="width:14.9pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:1pt; margin-right:4.4pt; text-align:right; font-size:8pt"><span style="font-weight:bold; color:#ffffff">F</span></p>
               </td>
               <td colspan="8" style="width:488.85pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:0.4pt; margin-left:2.25pt; font-size:9pt"><span style="font-weight:bold; color:#ffffff">Checklist</span><span style="font-weight:bold; letter-spacing:0.05pt; color:#ffffff"> </span><span style="font-weight:bold; color:#ffffff">History</span><span style="font-weight:bold; letter-spacing:0.15pt; color:#ffffff"> </span><span style="font-weight:bold; color:#ffffff">PM</span></p>
               </td>
            </tr>
            <tr style="height:18.8pt">
               <td style="width:13.78pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td style="width:92.12pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:4.25pt; margin-left:1.75pt; font-size:8pt"><span style="font-weight:bold">1.</span><span style="font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-weight:bold">Checklist</span><span style="font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-weight:bold">History</span><span style="font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-weight:bold">PM</span></p>
               </td>
               <td style="width:43.95pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="2" style="width:141.3pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:3.9pt; margin-left:74pt; font-size:9pt"><span></span><span style="letter-spacing:1.15pt"> </span><span style="font-size:8pt">{{$ahu->q46}}</span></p>
               </td>
               <td style="width:42.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:3.9pt; margin-right:0.9pt; text-align:right; font-size:9pt"><span></span></p>
               </td>
               <td style="width:39.4pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:4.6pt; margin-left:2pt; font-size:8pt"><span></span><span style="letter-spacing:-0.1pt"> </span><span></span></p>
               </td>
               <td colspan="2" style="width:128.57pt; border-right-style:solid; border-right-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
            </tr>
            <tr style="height:13.3pt">
               <td colspan="9" style="width:503.75pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:1pt; margin-right:215.2pt; margin-left:216.9pt; text-align:center; font-size:8pt"><span style="font-weight:bold; color:#ffffff">NOTES</span></p>
               </td>
            </tr>
            <tr style="height:104.85pt">
               <td colspan="9" style="width:502.25pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.4pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">Temuan</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">:{{$ahu->temuan}}</span></p>
               </td>
            </tr>
            <tr style="height:116.6pt">
               <td colspan="9" style="width:502.25pt; border-top-style:solid; border-top-width:1.5pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.4pt; line-height:9.7pt"><span style="font-size:8pt; font-weight:bold">Rekomendasi</span><span style="font-size:8pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-size:8pt; font-weight:bold">: {{$ahu->rekomendasi}}</span></p>
               </td>
            </tr>
            <tr style="height:13.65pt">
               <td colspan="9" style="width:503.75pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:1.35pt; margin-right:215.2pt; margin-left:216.9pt; text-align:center; font-size:8pt"><span style="font-weight:bold; color:#ffffff">RESUME</span></p>
               </td>
            </tr>
            <tr style="height:22.55pt">
               <td colspan="2" style="width:106.65pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:4.75pt; margin-left:19.15pt; font-size:10pt"><span style="font-weight:bold">JOB</span><span style="font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-weight:bold">COMPLETED</span><span style="font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-weight:bold">?</span></p>
               </td>
               <td style="width:43.95pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:6.05pt; margin-left:8.25pt; font-size:8pt"><span style="font-weight:bold"></span><span style="font-weight:bold; letter-spacing:-0.1pt"> </span><span style="font-weight:bold">{{$ahu->status}}</span></p>
               </td>
               <td colspan="2" style="width:141.3pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:6.05pt; margin-left:14.45pt; font-size:8pt"><span style="font-weight:bold"></span><span style="font-weight:bold; letter-spacing:1.5pt"> </span><span style="font-weight:bold"></span><span style="font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-weight:bold">please</span><span style="font-weight:bold; letter-spacing:-0.2pt"> </span><span style="font-weight:bold">check</span><span style="font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-weight:bold">on</span><span style="font-weight:bold; letter-spacing:-0.25pt"> </span><span style="font-weight:bold">NOTES</span></p>
               </td>
               <td style="width:42pt; border-right-style:solid; border-right-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="3" style="width:166.85pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:6.05pt; margin-left:1.25pt; font-size:8pt"><span style="font-weight:bold">RUNNING</span><span style="font-weight:bold; letter-spacing:-0.4pt"> </span><span style="font-weight:bold">HOURS</span><span style="font-weight:bold; letter-spacing:-0.3pt"> </span><span style="font-weight:bold">:{{$ahu->running_hour}}</span></p>
               </td>
            </tr>
            <tr style="height:13.65pt">
               <td colspan="9" style="width:503.75pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-top:1.35pt; margin-right:215.2pt; margin-left:217.05pt; text-align:center; font-size:8pt"><span style="font-weight:bold; letter-spacing:-0.05pt; color:#ffffff">APPROVAL</span><span style="font-weight:bold; letter-spacing:-0.35pt; color:#ffffff"> </span><span style="font-weight:bold; color:#ffffff">SIGNING</span></p>
               </td>
            </tr>
            <tr style="height:82.15pt">
               <td colspan="2" style="width:106.65pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-right:24.6pt; margin-left:31.95pt; text-align:center; line-height:10.35pt"><span style="font-size:9pt; font-weight:bold">Approved</span><span style="font-size:9pt; font-weight:bold; letter-spacing:0.15pt"> </span><span style="font-size:9pt; font-weight:bold">by</span></p>
                  <p class="TableParagraph" style="margin-top:1.1pt; margin-right:24.5pt; margin-left:31.95pt; text-align:center; font-size:9pt"><span>ISS,</span></p>
                  <p class="TableParagraph" style="font-size:9pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                  <p class="TableParagraph" style="font-size:9pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                  <p class="TableParagraph" style="font-size:9pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                  <p class="TableParagraph" style="margin-top:6.35pt; margin-left:14.35pt; font-size:8pt"><span style="font-family:'Arial MT'">(</span><span style="width:79.94pt; font-family:'Lucida Console'; text-decoration:underline; display:inline-block; -aw-font-family:'Times New Roman'; -aw-tabstop-align:left; -aw-tabstop-pos:96.95pt">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;</span><span style="font-family:'Arial MT'">)</span></p>
                  <p class="TableParagraph" style="margin-top:1.1pt; margin-left:15.2pt; font-size:8pt"><span style="font-family:'Arial MT'">No.</span><span style="font-family:'Arial MT'; letter-spacing:-0.45pt"> </span><span style="font-family:'Arial MT'">HP.</span></p>
               </td>
               <td style="width:43.95pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="2" style="width:141.3pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:14.25pt; text-align:center; line-height:10.1pt"><span style="font-size:9pt; font-weight:bold">Verified</span><span style="font-size:9pt; font-weight:bold; letter-spacing:0.35pt"> </span><span style="font-size:9pt; font-weight:bold">By</span></p>
                  <p class="TableParagraph" style="margin-top:2.65pt; margin-left:14.4pt; text-align:center; font-size:8pt"><span style="font-family:'Arial MT'">Supervisor,</span></p>
                  <p class="TableParagraph" style="font-size:9pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                  <p class="TableParagraph" style="font-size:9pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                  <p class="TableParagraph" style="font-size:9pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                  <p class="TableParagraph" style="margin-top:6.8pt; margin-left:14.3pt; text-align:center; font-size:8pt"><span style="font-family:'Arial MT'">(</span><span style="width:79.89pt; font-family:'Lucida Console'; text-decoration:underline; display:inline-block; -aw-font-family:'Times New Roman'; -aw-tabstop-align:left; -aw-tabstop-pos:96.85pt">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;</span><span style="font-family:'Arial MT'">)</span></p>
                  <p class="TableParagraph" style="margin-top:2.35pt; margin-left:30.6pt; font-size:8pt"><span style="font-family:'Arial MT'">No.</span><span style="font-family:'Arial MT'; letter-spacing:-0.45pt"> </span><span style="font-family:'Arial MT'">HP.</span></p>
               </td>
               <td style="width:42.75pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td style="width:39.4pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="2" style="width:128.2pt; border-right-style:solid; border-right-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:2.45pt; text-align:center; line-height:10.1pt"><span style="font-size:9pt; font-weight:bold">Service</span><span style="font-size:9pt; font-weight:bold; letter-spacing:0.15pt"> </span><span style="font-size:9pt; font-weight:bold">By</span></p>
                  <p class="TableParagraph" style="margin-top:2.2pt; margin-left:2.1pt; text-align:center; font-size:8pt"><span style="font-family:'Arial MT'; letter-spacing:-0.05pt">Team</span><span style="font-family:'Arial MT'; letter-spacing:-0.45pt"> </span><span style="font-family:'Arial MT'; letter-spacing:-0.05pt">Leader/Staf,</span></p>
                  <p class="TableParagraph" style="font-size:9pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                  <p class="TableParagraph" style="font-size:9pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                  <p class="TableParagraph" style="font-size:9pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                  <p class="TableParagraph" style="margin-top:7.25pt; margin-left:2.4pt; text-align:center; font-size:8pt"><span style="font-family:'Arial MT'">(</span><span style="width:79.94pt; font-family:'Lucida Console'; text-decoration:underline; display:inline-block; -aw-font-family:'Times New Roman'; -aw-tabstop-align:left; -aw-tabstop-pos:85pt">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;</span><span style="font-family:'Arial MT'">)</span></p>
                  <p class="TableParagraph" style="margin-top:2.35pt; margin-left:13.5pt; font-size:8pt"><span style="font-family:'Arial MT'">No.</span><span style="font-family:'Arial MT'; letter-spacing:-0.4pt"> </span><span style="font-family:'Arial MT'">HP.</span></p>
               </td>
            </tr>
            <tr style="height:0pt">
               <td style="width:14.9pt"></td>
               <td style="width:92.5pt"></td>
               <td style="width:43.95pt"></td>
               <td style="width:84.05pt"></td>
               <td style="width:57.25pt"></td>
               <td style="width:42.75pt"></td>
               <td style="width:39.4pt"></td>
               <td style="width:39.4pt"></td>
               <td style="width:89.55pt"></td>
            </tr>
         </table>
         <p class="BodyText" style="margin-top:1.4pt; margin-left:7.8pt"><span>Keterangan</span><span style="letter-spacing:-0.2pt"> </span><span>:</span><span style="letter-spacing:-0.25pt"> </span><span>Lembar</span><span style="letter-spacing:-0.15pt"> </span><span>1</span><span style="letter-spacing:-0.25pt"> </span><span>untuk</span><span style="letter-spacing:-0.15pt"> </span><span>Teknisi;</span><span style="letter-spacing:-0.25pt"> </span><span>Lembar</span><span style="letter-spacing:-0.2pt"> </span><span>2</span><span style="letter-spacing:-0.25pt"> </span><span>untuk</span><span style="letter-spacing:-0.15pt"> </span><span>User;</span><span style="letter-spacing:-0.25pt"> </span><span>Lembar</span><span style="letter-spacing:-0.15pt"> </span><span>3</span><span style="letter-spacing:-0.25pt"> </span><span>Arsip</span><span style="letter-spacing:-0.25pt"> </span><span>Kantor</span></p>
      </div>
      @include('pdf.tablegambar')
   </body>
</html>