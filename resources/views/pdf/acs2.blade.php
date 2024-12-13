<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="Content-Style-Type" content="text/css" />
      <meta name="generator" content="Aspose.Words for .NET 24.11.1" />
      <title>PM SPLIT DUCT</title>
      <style type="text/css">
         body {
         widows: 0;
         orphans: 0;
         font-family: Calibri;
         font-size: 11pt
         }
         p {
         margin: 0pt
         }
         table {
         margin-top: 0pt;
         margin-bottom: 0pt
         }
         .ListParagraph {
         margin: 0pt;
         text-align: left;
         line-height: normal;
         widows: 0;
         orphans: 0;
         font-family: Calibri;
         font-size: 11pt;
         -aw-style-name: list-paragraph
         }
         .TableParagraph {
         margin: 0pt;
         text-align: left;
         line-height: normal;
         widows: 0;
         orphans: 0;
         font-family: Calibri;
         font-size: 11pt;
         -aw-style-name: 'Table Paragraph'
         }
         .TableNormal {}
      </style>
   </head>
   <body>
      <div>
         <table cellspacing="0" style="border-collapse:collapse; width:100%;">
           <tr> <!-- Reduced height -->
   <!-- Kolom Gambar -->
   <td style="background-color:rgb(255, 255, 255); padding:10px; border-left:1.5pt solid #000000; border-top:1.5pt solid #000000; text-align:center;">
      <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/sign.png'))) }}" 
         alt="Logo" style="max-width:100%; height:40px;">
   </td>
   <!-- Kolom Judul -->
   <td colspan="8" style="background-color:rgb(255, 255, 255); color:rgb(0, 0, 0); padding:10px; border-top:1.5pt solid #000000;">
      <p style="margin:0; font-family:Arial; font-weight:bold;">PT. DIKARI TATA UDARA INDONESIA</p>
      <p style="margin:0; font-family:Arial; font-size:7pt;">AIR CONDITIONING DIVISION</p>
      <p style="margin:0; font-family:Arial; font-size:6pt;">Sales, Design, Service, Installation, Preventive Maintenance</p>
   </td>
   <!-- Kolom Status -->
   <td colspan="4" style="padding:10px; border:1.5pt solid #000000; text-align:center;">
      <p style="margin:0; font-size:6pt; font-weight:bold;">Status Approval</p>
      <p style="margin:0; font-size:9.5pt; font-weight:bold; color:#00b04f;">APPROVED</p>
   </td>
</tr>

            <tr style="height:17.2pt">
               <td colspan="13" style="width:486.6pt; border:1.5pt solid; vertical-align:top; text-align:center;">
                  <p class="TableParagraph" style="margin:0.35pt auto; font-size:12.5pt; white-space:nowrap; text-align:center">
                     <span style="font-weight:bold">SERVICE REPORT PM AC SERIES - SPLIT DUCTL</span>
                  </p>
               </td>
            </tr>
            <tr style="height:11pt">
               <td colspan="5"
                  style="width:198.02pt; border-right:2.25pt solid #ffffff; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph"
                     style="margin-right:72.3pt; margin-left:75.2pt; text-align:center; font-size:7.5pt"><span
                     style="font-weight:bold; color:#ffffff">GENERAL</span><span
                     style="font-weight:bold; letter-spacing:0.3pt; color:#ffffff"> </span><span
                     style="font-weight:bold; color:#ffffff">DATA</span></p>
               </td>
               <td colspan="8"
                  style="width:287.82pt; border-left:2.25pt solid #ffffff; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph"
                     style="margin-right:127.35pt; margin-left:128.2pt; text-align:center; font-size:7.5pt"><span
                     style="font-weight:bold; color:#ffffff">TASK</span><span
                     style="font-weight:bold; letter-spacing:0.15pt; color:#ffffff"> </span><span
                     style="font-weight:bold; color:#ffffff">LIST</span></p>
               </td>
            </tr>
            <tr style="height:9.15pt">
               <td colspan="5" rowspan="6"
                  style="width:197.65pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.15pt; line-height:8.2pt"><span
                     style="font-size:7.5pt">Form No.</span><span
                     style="width:51.26pt; font-family:'Times New Roman'; font-size:7.5pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:80.8pt">&#xa0;</span><span
                     style="font-size:7.5pt">:   <?php
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
                     echo strtoupper($singkatan1 .'-'. $singkatan2 .'-'.$formattedId = sprintf('%05d', $equipment->id).'-'. $formattedId2 = sprintf('%04d',$Acs->id));
                     // Mengambil karakter pertama
                     
                     
                     ?></span></p>
                  <p class="TableParagraph" style="margin-top:0.9pt; margin-left:1.15pt; font-size:7.5pt">
                     <span>Created</span><span style="letter-spacing:1.95pt"> </span><span>Date</span><span
                        style="width:39.38pt; font-family:'Times New Roman'; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:80.8pt">&#xa0;</span><span
                        style="vertical-align:0.5pt">: {{$Acs->tanggal_survey}}</span>
                  </p>
                  <p class="TableParagraph" style="margin-top:0.9pt; margin-left:1.15pt; font-size:7.5pt">
                     <span>Modified</span><span style="letter-spacing:0.25pt"> </span><span>Date</span><span
                        style="width:35.79pt; font-family:'Times New Roman'; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:80.8pt">&#xa0;</span><span>: {{$Acs->date_completed}}</span>
                  </p>
                  <p class="TableParagraph" style="margin-top:1.3pt; margin-left:1.15pt; font-size:7.5pt">
                     <span>Supervisor</span><span
                        style="width:47.36pt; font-family:'Times New Roman'; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:80.8pt">&#xa0;</span><span>:{{$Acs->approved_by}}</span>
                  </p>
                  <p class="TableParagraph" style="margin-top:1.3pt; margin-left:1.15pt; font-size:7.5pt">
                     <span>Team</span><span style="letter-spacing:0.15pt"> </span><span>Leader</span><span
                        style="width:40.22pt; font-family:'Times New Roman'; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:80.8pt">&#xa0;</span><span>: {{$Acs->created_by}}</span>
                  </p>
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:1.15pt; line-height:9.1pt"><span
                     style="font-size:7.5pt">Technician</span><span
                     style="font-size:7.5pt; letter-spacing:0.25pt"></span><span
                     style="font-size:7.5pt">List</span><span
                     style="width:35.05pt; font-family:'Times New Roman'; font-size:7.5pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:80.8pt">&#xa0;</span><span
                     style="font-size:7.5pt">:&nbsp;{{$Acs->enginerlist}}</span></p>
                  </p>
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:1.15pt; line-height:9.1pt"><span
                     style="font-size:7.5pt">Start PM</span><span
                     style="font-size:7.5pt; letter-spacing:0.25pt"></span><span
                     style="font-size:7.5pt"></span><span
                     style="width:35.05pt; font-family:'Times New Roman'; font-size:7.5pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:80.8pt">&#xa0;</span><span
                     style="font-size:7.5pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$Acs->start}}</span></p>
                  </p>
                  <p class="TableParagraph" style="margin-top:1.15pt; margin-left:1.15pt; line-height:9.1pt"><span
                     style="font-size:7.5pt">Stop PM</span><span
                     style="font-size:7.5pt; letter-spacing:0.25pt"></span><span
                     style="font-size:7.5pt"></span><span
                     style="width:35.05pt; font-family:'Times New Roman'; font-size:7.5pt; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:80.8pt">&#xa0;</span><span
                     style="font-size:7.5pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$Acs->stop}}</span></p>
               </td>
               <td colspan="6"
                  style="width:237.98pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph"
                     style="margin-right:95.45pt; margin-left:96.95pt; text-align:center; line-height:8.15pt"><span
                     style="font-size:7.5pt; font-weight:bold">INDOOR</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.2pt"> </span><span
                     style="font-size:7.5pt; font-weight:bold">UNIT</span></p>
               </td>
               <td
                  style="width:26.85pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-left:8.7pt; line-height:8.15pt"><span
                     style="font-size:7pt; font-weight:bold">Std.</span></p>
               </td>
               <td
                  style="width:21.12pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-left:2.25pt; line-height:8.15pt"><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.05pt">Aktual</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>1.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek</span><span
                        style="letter-spacing:-0.05pt"> </span><span>cover</span><span
                        style="letter-spacing:-0.05pt"> </span><span>unit :</span><span
                        style="letter-spacing:-0.05pt"> </span><span>bersih,</span><span
                        style="-aw-import:spaces">&#xa0; </span><span>skrup lengkap</span><span
                        style="letter-spacing:0.05pt"> </span><span>dan tidak</span><span
                        style="letter-spacing:-0.05pt"> </span><span>ada</span><span style="letter-spacing:-0.05pt">
                     </span><span>kerusakan</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
              <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q1 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q1}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.65pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:1pt; margin-left:1.05pt; font-size:6pt">
                     <span>2.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek</span><span
                        style="letter-spacing:-0.05pt"> </span><span>kondisi filter</span><span
                        style="letter-spacing:-0.1pt"> </span><span>:</span><span style="letter-spacing:-0.05pt">
                     </span><span>pastikan</span><span style="letter-spacing:0.05pt"> </span><span>tidak</span><span
                        style="letter-spacing:-0.05pt"> </span><span>kotor</span><span
                        style="letter-spacing:-0.1pt"> </span><span>dan</span><span style="letter-spacing:0.05pt">
                     </span><span>tidak</span><span style="letter-spacing:-0.05pt"> </span><span>rusak</span><span
                        style="letter-spacing:-0.05pt"> </span><span>(cleaning jika</span><span
                        style="letter-spacing:-0.1pt"> </span><span>kotor)</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.05pt; margin-left:10.25pt; font-size:7pt">
                     <span>OK</span>
                  </p>
               </td>
              <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q2 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q2}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.65pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:1pt; margin-left:1.05pt; font-size:6pt">
                     <span>3.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek</span><span
                        style="letter-spacing:-0.05pt"> </span><span>kondisi fin evap</span><span
                        style="letter-spacing:0.05pt"> </span><span>:</span><span style="letter-spacing:-0.05pt">
                     </span><span>pastikan tidak kotor</span><span style="letter-spacing:-0.1pt">
                     </span><span>dan</span><span style="letter-spacing:0.05pt"> </span><span>tidak</span><span
                        style="letter-spacing:-0.05pt"> </span><span>rusak (cleaning</span><span
                        style="letter-spacing:-0.05pt"> </span><span>jika</span><span style="letter-spacing:-0.1pt">
                     </span><span>kotor)</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.05pt; margin-left:10.25pt; font-size:7pt">
                     <span>OK</span>
                  </p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q3 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q3}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.65pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:1pt; margin-left:1.05pt; font-size:6pt">
                     <span>4.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek kondisi</span><span
                        style="letter-spacing:-0.05pt"> </span><span>blower</span><span
                        style="letter-spacing:-0.05pt"> </span><span>fan : pastikan tidak kotor</span><span
                        style="letter-spacing:-0.1pt"> </span><span>dan</span><span style="letter-spacing:0.05pt">
                     </span><span>tidak</span><span style="letter-spacing:-0.05pt"> </span><span>rusak
                     (cleaning</span><span style="letter-spacing:-0.05pt"> </span><span>jika</span><span
                        style="letter-spacing:-0.05pt"> </span><span>kotor)</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.05pt; margin-left:10.25pt; font-size:7pt">
                     <span>OK</span>
                  </p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q4 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q4}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.65pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:1pt; margin-left:1.1pt; font-size:6pt">
                     <span>5.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek kondisi</span><span
                        style="letter-spacing:-0.05pt"> </span><span>drain</span><span
                        style="letter-spacing:0.05pt"> </span><span>sistem</span><span
                        style="letter-spacing:-0.05pt"> </span><span>: pastikan tidak ada</span><span
                        style="letter-spacing:-0.1pt"> </span><span>lendir</span><span
                        style="letter-spacing:-0.05pt"> </span><span>dan tidak tersumbat</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph"
                     style="margin-top:0.05pt; margin-right:3.1pt; text-align:right; font-size:7pt">
                     <span>Lancar</span>
                  </p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q5 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q5}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="5" style="width:199.15pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-left:66.95pt; line-height:8.35pt"><span
                     style="font-size:7.5pt; font-weight:bold; color:#ffffff">EQUIPMENT</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.35pt; color:#ffffff">
                     </span><span style="font-size:7.5pt; font-weight:bold; color:#ffffff">PROFILE</span>
                  </p>
               </td>
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.1pt; font-size:6pt">
                     <span>6.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek</span><span
                        style="letter-spacing:-0.05pt"> </span><span>putaran blower</span><span
                        style="letter-spacing:-0.1pt"> </span><span>:</span><span style="letter-spacing:-0.05pt">
                     </span><span>pastikan aliran udara</span><span style="letter-spacing:-0.05pt">
                     </span><span>pada</span><span style="letter-spacing:-0.1pt"> </span><span>evaporator</span><span
                        style="letter-spacing:-0.1pt"> </span><span>lancar</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-right:3.1pt; text-align:right; line-height:8.25pt"><span
                     style="font-size:7pt">Lancar</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q6 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q6}}</span>
      @endif</span></p>
               </td>
            </tr>
            <td colspan="5" rowspan="15" style="width:197.65pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
  <p class="TableParagraph" style="margin-left:1.15pt; line-height:8.4pt">
    <span style="font-size:7.5pt; display:inline-block; width:70pt;">Customer</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span style="font-size:7.5pt">{{$equipment->customer}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.9pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">Site</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->area}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.95pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">Area - Room</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->site}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.9pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">ID Si-PM</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->id_combine}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.95pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">Brand</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->brand}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.9pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">Type/Model</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->model}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.95pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">Serial No.</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->serial_number}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.9pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">Kapasitas</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->area}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.95pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">Running Hours</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->jamoperasi}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.9pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">Name Plate</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->nameplate}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.95pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">Thn. Pembuatan</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->tahun_pembuatan}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.9pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">Tahun Install</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->tahun_installasi}}</span>
  </p>
  <p class="TableParagraph" style="margin-top:0.9pt; margin-left:1.15pt; font-size:7.5pt">
    <span style="display:inline-block; width:70pt;">Equipment Notes</span>
    <span style="display:inline-block; width:10pt; text-align:center;">:</span>
    <span>{{$equipment->other}}</span>
  </p>
</td>

               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.1pt; font-size:6pt">
                     <span>7.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek Insulasi pipa</span><span
                        style="letter-spacing:-0.05pt"> </span><span>:</span><span style="letter-spacing:-0.05pt">
                     </span><span>pastikan</span><span style="letter-spacing:0.05pt"> </span><span>semua</span><span
                        style="letter-spacing:-0.05pt"> </span><span>pipa, tidak</span><span
                        style="letter-spacing:-0.05pt"> </span><span>rusak atau</span><span
                        style="letter-spacing:0.05pt"> </span><span>kondensasi</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q7 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q7}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.1pt; font-size:6pt">
                     <span>8.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek</span><span
                        style="letter-spacing:-0.05pt"> </span><span>bocor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>refrigerant :</span><span
                        style="letter-spacing:-0.05pt"> </span><span>tidak ada</span><span
                        style="letter-spacing:-0.1pt"> </span><span>oli</span><span style="letter-spacing:-0.05pt">
                     </span><span>di area</span><span style="letter-spacing:-0.1pt"> </span><span>indoor,</span><span
                        style="letter-spacing:-0.05pt"> </span><span>bak drain &amp;</span><span
                        style="letter-spacing:-0.05pt"> </span><span>sambungan</span><span
                        style="letter-spacing:0.05pt"> </span><span>pipa</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph"
                     style="margin-top:0.65pt; margin-right:0.4pt; text-align:right; font-size:6pt">
                     <span>No</span><span style="letter-spacing:0.05pt"> </span><span>Bocor</span>
                  </p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                                    style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q8 == 1)
                    <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q8}}</span>
                    @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.1pt; font-size:6pt">
                     <span>9.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek modul</span><span
                        style="letter-spacing:-0.05pt"> </span><span>indoor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>: pastikan kabel terkoneksi dan tidak
                     rusak</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
              <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q9 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q9}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.1pt; font-size:6pt">
                     <span>10.</span><span style="letter-spacing:-0.1pt"> </span><span>Kencangkan</span><span
                        style="letter-spacing:0.05pt"> </span><span>semua</span><span
                        style="letter-spacing:-0.05pt"> </span><span>koneksi kabel pada</span><span
                        style="letter-spacing:-0.05pt"> </span><span>terminal indoor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>unit</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph"
                     style="margin-top:0.65pt; margin-right:1.45pt; text-align:right; font-size:6pt">
                     <span>Kencang</span>
                  </p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q10 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q10}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>11.</span><span style="letter-spacing:-0.1pt"> </span><span>Test</span><span
                        style="letter-spacing:0.05pt"> </span><span>running : pastikan tidak ada</span><span
                        style="letter-spacing:-0.05pt"> </span><span>suara</span><span
                        style="letter-spacing:-0.1pt"> </span><span>atau</span><span style="letter-spacing:0.05pt">
                     </span><span>vibrasi</span><span style="letter-spacing:-0.05pt"> </span><span>yang</span><span
                        style="letter-spacing:0.05pt"> </span><span>abnormal</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q11 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q11}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>12.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek setpoint</span><span
                        style="letter-spacing:0.05pt"> </span><span>remote</span><span
                        style="letter-spacing:-0.1pt"> </span><span>: pastikan</span><span
                        style="letter-spacing:0.05pt"> </span><span>mode</span><span style="letter-spacing:-0.1pt">
                     </span><span>cool sesuai temperature</span><span style="letter-spacing:-0.1pt">
                     </span><span>yang</span><span style="letter-spacing:0.05pt"> </span><span>diinginkan</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q12 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q12}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>13.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek timer</span><span
                        style="letter-spacing:-0.05pt"> </span><span>pada</span><span
                        style="letter-spacing:-0.05pt"> </span><span>remote</span><span
                        style="letter-spacing:-0.05pt"> </span><span>: pastikan sesuai dengan</span><span
                        style="letter-spacing:0.05pt"> </span><span>kebutuhan</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q13 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q13}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>14.</span><span style="letter-spacing:-0.15pt"> </span><span>Check</span><span
                        style="letter-spacing:-0.05pt"> </span><span>baterai</span><span
                        style="letter-spacing:-0.05pt"> </span><span>pada</span><span style="letter-spacing:-0.1pt">
                     </span><span>remote,</span><span style="letter-spacing:-0.05pt"> </span><span>lakukan
                     penggantian jika</span><span style="letter-spacing:-0.1pt"> </span><span>diperlukan</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q14 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q14}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph"
                     style="margin-top:0.4pt; margin-right:95.35pt; margin-left:96.95pt; text-align:center; font-size:6pt">
                     <span style="font-weight:bold">OUTDOOR</span><span
                        style="font-weight:bold; letter-spacing:0.1pt"> </span><span
                        style="font-weight:bold">UNIT</span>
                  </p>
               </td>
               <td
                  style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>15.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek</span><span
                        style="letter-spacing:-0.05pt"> </span><span>cover</span><span
                        style="letter-spacing:-0.05pt"> </span><span>unit : pastikan bersih, skrup
                     lengkap</span><span style="letter-spacing:0.05pt"> </span><span>dan tidak rusak</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
              <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q15 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q15}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>16.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek</span><span
                        style="letter-spacing:-0.05pt"> </span><span>kondisi fin kondensor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>:</span><span style="letter-spacing:-0.05pt">
                     </span><span>pastikan</span><span style="letter-spacing:0.05pt"> </span><span>bersih dan tidak
                     rusak</span><span style="letter-spacing:-0.05pt"> </span><span>(cleaning jika</span><span
                        style="letter-spacing:-0.1pt"> </span><span>kotor)</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q16 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q16}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>17.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek fan outdoor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>: terpasang dgn</span><span
                        style="letter-spacing:0.05pt"> </span><span>baik, tidak</span><span
                        style="letter-spacing:-0.05pt"> </span><span>kotor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>&amp; rusak</span><span
                        style="letter-spacing:-0.05pt"> </span><span>(cleaning jika</span><span
                        style="letter-spacing:-0.05pt"> </span><span>kotor)</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q17 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q17}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>18.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek putaran fan</span><span
                        style="letter-spacing:0.05pt"> </span><span>outdoor</span><span
                        style="letter-spacing:-0.1pt"> </span><span>: pastikan</span><span
                        style="letter-spacing:0.05pt"> </span><span>aliran udara</span><span
                        style="letter-spacing:-0.05pt"> </span><span>pada</span><span style="letter-spacing:-0.1pt">
                     </span><span>kondensor</span><span style="letter-spacing:-0.05pt"> </span><span>lancar</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q18 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q18}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>19.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek Insulasi</span><span
                        style="letter-spacing:-0.05pt"> </span><span>pipa</span><span
                        style="letter-spacing:-0.05pt"> </span><span>:</span><span style="letter-spacing:-0.05pt">
                     </span><span>semua</span><span style="letter-spacing:-0.05pt"> </span><span>pipa</span><span
                        style="letter-spacing:-0.05pt"> </span><span>terinsulasi</span><span
                        style="letter-spacing:-0.05pt"> </span><span>baik dan tidak rusak/kondensasi</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q19 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q19}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>20.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek</span><span
                        style="letter-spacing:-0.05pt"> </span><span>kebocoran</span><span
                        style="letter-spacing:0.05pt"> </span><span>refrigerant : tidak</span><span
                        style="letter-spacing:-0.05pt"> </span><span>ada</span><span style="letter-spacing:-0.1pt">
                     </span><span>oli di</span><span style="letter-spacing:-0.05pt"> </span><span>area</span><span
                        style="letter-spacing:-0.05pt"> </span><span>kondensor</span><span
                        style="letter-spacing:-0.1pt"> </span><span>&amp;</span><span
                        style="letter-spacing:-0.05pt"> </span><span>sambungan</span><span
                        style="letter-spacing:0.05pt"> </span><span>pipa</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph"
                     style="margin-top:0.65pt; margin-right:0.4pt; text-align:right; font-size:6pt">
                     <span>No</span><span style="letter-spacing:0.05pt"> </span><span>Bocor</span>
                  </p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q20 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q20}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="5" style="width:199.15pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph" style="margin-left:41.25pt; line-height:7.85pt"><span
                     style="font-family:Arial; font-size:7pt; font-weight:bold; letter-spacing:-0.05pt; color:#ffffff">HASIL</span><span
                     style="font-family:Arial; font-size:7pt; font-weight:bold; letter-spacing:-0.45pt; color:#ffffff">
                     </span><span
                        style="font-family:Arial; font-size:7pt; font-weight:bold; color:#ffffff">PENGUKURAN</span><span
                        style="font-family:Arial; font-size:7pt; font-weight:bold; letter-spacing:-0.35pt; color:#ffffff">
                     </span><span
                        style="font-family:Arial; font-size:7pt; font-weight:bold; color:#ffffff">PARAMETER</span>
                  </p>
               </td>
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>21.</span><span style="letter-spacing:-0.05pt"> </span><span>Kencangkan</span><span
                        style="letter-spacing:0.05pt"> </span><span>semua</span><span
                        style="letter-spacing:-0.05pt"> </span><span>koneksi kabel pada</span><span
                        style="letter-spacing:-0.05pt"> </span><span>terminal outdoor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>unit</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q21 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q21}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="2"
                  style="width:78.82pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-left:23.85pt; line-height:8.15pt"><span
                     style="font-size:7pt; font-weight:bold">Parameter</span></p>
               </td>
               <td
                  style="width:38.85pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-left:7pt; line-height:8.15pt"><span
                     style="font-size:7pt; font-weight:bold">Standard</span></p>
               </td>
               <td
                  style="width:38.35pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-left:10.75pt; line-height:8.15pt"><span
                     style="font-size:7pt; font-weight:bold">Before</span></p>
               </td>
               <td
                  style="width:39.38pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-left:13.75pt; line-height:8.15pt"><span
                     style="font-size:7pt; font-weight:bold">After</span></p>
               </td>
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>22.</span><span style="letter-spacing:-0.05pt"> </span><span>Cek Kapasitor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>kompressor</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q22 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q22}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="2" rowspan="2"
                  style="width:78.82pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:4.5pt; margin-left:11.95pt; font-size:7.5pt"><span
                     style="font-weight:bold">Temperature</span><span
                     style="font-weight:bold; letter-spacing:0.1pt"> </span><span
                     style="font-weight:bold">(</span><span style="font-weight:bold; letter-spacing:0.2pt">
                     </span><span style="font-weight:bold">C</span><span
                        style="font-weight:bold; letter-spacing:0.2pt"> </span><span
                        style="font-weight:bold">)</span>
                  </p>
               </td>
               <td rowspan="2" style="width:38.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt; text-align:center"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td rowspan="2" style="width:38.35pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt; text-align:center"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">{{$Acs->parameter_before1}}</span></p>
               </td>
               <td rowspan="2"
                  style="width:39.38pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt; text-align:center"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">{{$Acs->parameter_after1}}</span></p>
               </td>
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>23.</span><span style="letter-spacing:-0.05pt"> </span><span>Cek</span><span
                        style="letter-spacing:0.05pt"> </span><span>Kapasitor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>motor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>fan</span><span style="letter-spacing:0.1pt">
                     </span><span>kondensor</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q23 == 1)
                    <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q23}}</span>
                    @endif</span></p>
                            </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>24.</span><span style="letter-spacing:-0.1pt"> </span><span>Test</span><span
                        style="letter-spacing:0.05pt"> </span><span>running : pastikan tidak ada</span><span
                        style="letter-spacing:-0.05pt"> </span><span>suara</span><span
                        style="letter-spacing:-0.1pt"> </span><span>atau</span><span style="letter-spacing:0.05pt">
                     </span><span>vibrasi</span><span style="letter-spacing:-0.05pt"> </span><span>yang</span><span
                        style="letter-spacing:0.05pt"> </span><span>abnormal</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q24 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q24}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="2" rowspan="2"
                  style="width:78.82pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:4.5pt; margin-left:18.2pt; font-size:7.5pt"><span
                     style="font-weight:bold">Pressure</span><span
                     style="font-weight:bold; letter-spacing:0.25pt"> </span><span
                     style="font-weight:bold">(Psi)</span></p>
               </td>
               <td rowspan="2" style="width:38.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
                 <td rowspan="2" style="width:38.35pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt; text-align:center"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">{{$Acs->parameter_before2}}</span></p>
               </td>
               <td rowspan="2"
                  style="width:39.38pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt; text-align:center"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">{{$Acs->parameter_after2}}</span></p>
               </td>
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>25.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek ampere</span><span
                        style="letter-spacing:-0.1pt"> </span><span>kompressor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>dan sesuaikan</span><span
                        style="letter-spacing:0.05pt"> </span><span>dengan kapasitas</span><span
                        style="letter-spacing:0.05pt"> </span><span>di</span><span style="letter-spacing:-0.05pt">
                     </span><span>nameplate</span><span style="letter-spacing:-0.05pt"> </span><span>unit</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q25 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q25}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>26.</span><span style="letter-spacing:-0.1pt"> </span><span>Cek ampere</span><span
                        style="letter-spacing:-0.1pt"> </span><span>motor</span><span
                        style="letter-spacing:-0.05pt"> </span><span>fan</span><span style="letter-spacing:0.05pt">
                     </span><span>kondensor,</span><span style="letter-spacing:-0.05pt">
                     </span><span>pastikan</span><span style="letter-spacing:0.05pt">
                     </span><span>kapasitasnya</span><span style="letter-spacing:-0.1pt"> </span><span>sesuai
                     nameplate</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q26 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q26}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="2" rowspan="2"
                  style="width:78.82pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:4.5pt; margin-left:21.55pt; font-size:7.5pt"><span
                     style="font-weight:bold">Ampere</span><span style="font-weight:bold; letter-spacing:0.15pt">
                     </span><span style="font-weight:bold">(A)</span>
                  </p>
               </td>
               <td rowspan="2"
                  style="width:38.85pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
                   <td rowspan="2" style="width:38.35pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt; text-align:center"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">{{$Acs->parameter_before3}}</span></p>
               </td>
               <td rowspan="2"
                  style="width:39.38pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:8pt; text-align:center"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">{{$Acs->parameter_after3}}</span></p>
               </td>
               <td colspan="6"
                  style="width:237.98pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-top:0.65pt; margin-left:1.05pt; font-size:6pt">
                     <span>27.</span><span style="letter-spacing:-0.15pt"> </span><span>Cek</span><span
                        style="letter-spacing:-0.05pt"> </span><span>tekanan kompressor</span><span
                        style="letter-spacing:-0.1pt"> </span><span>disesuaikan dengan</span><span
                        style="letter-spacing:-0.05pt"> </span><span>tipe</span><span style="letter-spacing:-0.1pt">
                     </span><span>referigerant</span>
                  </p>
               </td>
               <td style="width:26.85pt; border-style:solid; border-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:10.25pt; line-height:8.25pt"><span
                     style="font-size:7pt">OK</span></p>
               </td>
               <td
                  style="width:21.12pt; border-style:solid; border-width:0.75pt 1.5pt 0.75pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:7pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore"> @if($Acs->q27 == 1)
      <span style="font-family: DejaVu Sans; font-size: 7pt;">{{$Acs->q27}}</span>
      @endif</span></p>
               </td>
            </tr>
            <tr style="height:9pt">
               <td colspan="6"
                  style="width:237.98pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td
                  style="width:26.85pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td
                  style="width:21.12pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
            </tr>
            <tr style="height:11.6pt">
               <td colspan="13" style="width:488.1pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph"
                     style="margin-top:0.6pt; margin-right:194.55pt; margin-left:196.4pt; text-align:center; font-size:7pt">
                     <span style="font-family:Arial; font-weight:bold; color:#ffffff">DOKUMENTASI</span><span
                        style="font-family:Arial; font-weight:bold; letter-spacing:-0.35pt; color:#ffffff">
                     </span><span style="font-family:Arial; font-weight:bold; color:#ffffff">BEFORE</span><span
                        style="font-family:Arial; font-weight:bold; letter-spacing:-0.25pt; color:#ffffff">
                     </span><span style="font-family:Arial; font-weight:bold; color:#ffffff">PM</span>
                  </p>
               </td>
            </tr>
            <tr style="height:9.05pt">
               <td colspan="6"
                  style="width:237.1pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-left:77.8pt; line-height:8.1pt"><span
                     style="font-size:7.5pt; font-weight:bold">PARAMETER</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.35pt"> </span><span
                     style="font-size:7.5pt; font-weight:bold">(BEFORE</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.35pt"> </span><span
                     style="font-size:7.5pt; font-weight:bold">PM)</span></p>
               </td>
               <td colspan="7"
                  style="width:248pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-left:69.5pt; line-height:8.1pt"><span
                     style="font-size:7.5pt; font-weight:bold">KONDISI</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.35pt"> </span><span
                     style="font-size:7.5pt; font-weight:bold">KOMPONEN</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.25pt"> </span><span
                     style="font-size:7.5pt; font-weight:bold">(BEFORE</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.3pt"> </span><span
                     style="font-size:7.5pt; font-weight:bold">PM)</span></p>
               </td>
            </tr>
            <tr style="height:12.75pt">
               <td colspan="2"
                  style="width:78.45pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:14.7pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Temperature</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span
                     style="font-size:7pt; font-weight:bold">(</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span
                     style="font-size:7pt; font-weight:bold">C</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span
                     style="font-size:7pt; font-weight:bold">)</span></p>
               </td>
               <td colspan="2"
                  style="width:77.2pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:20.2pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Pressure</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span
                     style="font-size:7pt; font-weight:bold">(Psi)</span></p>
               </td>
               <td colspan="2"
                  style="width:78.45pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:24.2pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Ampere</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span
                     style="font-size:7pt; font-weight:bold">(A)</span></p>
               </td>
               <td style="width:77.9pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:27.4pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Coil</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span
                     style="font-size:7pt; font-weight:bold">Evap</span></p>
               </td>
               <td colspan="3"
                  style="width:77.65pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:19.05pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Coil</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.4pt"> </span><span
                     style="font-size:7pt; font-weight:bold">Condensor</span></p>
               </td>
               <td colspan="3"
                  style="width:77.65pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:19.05pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Bak</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.4pt"> </span><span
                     style="font-size:7pt; font-weight:bold">Drain</span></p>
               </td>
         
            </tr>
           <tr style="height:80px;">
    <td colspan="2" style="width:75.78pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotoparameter_before1 && file_exists(public_path('gambar/' . $Acs->fotoparameter_before1)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotoparameter_before1))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
    <td colspan="2" style="width:75.78pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotoparameter_before2 && file_exists(public_path('gambar/' . $Acs->fotoparameter_before2)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotoparameter_before2))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
    <td colspan="2" style="width:75.78pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotoparameter_before3 && file_exists(public_path('gambar/' . $Acs->fotoparameter_before3)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotoparameter_before3))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
    <td style="width:75.78pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotokomponen_beforr1 && file_exists(public_path('gambar/' . $Acs->fotokomponen_beforr1)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotokomponen_beforr1))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
    <td colspan="3" style="width:77.65pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotokomponen_befor2 && file_exists(public_path('gambar/' . $Acs->fotokomponen_befor2)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotokomponen_befor2))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
    <td colspan="3" style="width:77.65pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotokomponen_befor3 && file_exists(public_path('gambar/' . $Acs->fotokomponen_befor3)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotokomponen_befor3))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
</tr>
{{-- After --}}

              <tr style="height:11.6pt">
               <td colspan="13" style="width:488.1pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph"
                     style="margin-top:0.6pt; margin-right:194.55pt; margin-left:196.4pt; text-align:center; font-size:7pt">
                     <span style="font-family:Arial; font-weight:bold; color:#ffffff">DOKUMENTASI</span><span
                        style="font-family:Arial; font-weight:bold; letter-spacing:-0.35pt; color:#ffffff">
                     </span><span style="font-family:Arial; font-weight:bold; color:#ffffff">AFTER</span><span
                        style="font-family:Arial; font-weight:bold; letter-spacing:-0.25pt; color:#ffffff">
                     </span><span style="font-family:Arial; font-weight:bold; color:#ffffff">PM</span>
                  </p>
               </td>
            </tr>
            <tr style="height:9.05pt">
               <td colspan="6"
                  style="width:237.1pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-left:77.8pt; line-height:8.1pt"><span
                     style="font-size:7.5pt; font-weight:bold">PARAMETER</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.35pt"> </span><span
                     style="font-size:7.5pt; font-weight:bold">(AFTER</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.35pt"> </span><span
                     style="font-size:7.5pt; font-weight:bold">PM)</span></p>
               </td>
               <td colspan="7"
                  style="width:248pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top; background-color:#d9d9d9">
                  <p class="TableParagraph" style="margin-left:69.5pt; line-height:8.1pt"><span
                     style="font-size:7.5pt; font-weight:bold">KONDISI</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.35pt"> </span><span
                     style="font-size:7.5pt; font-weight:bold">KOMPONEN</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.25pt"> </span><span
                     style="font-size:7.5pt; font-weight:bold">(AFTER</span><span
                     style="font-size:7.5pt; font-weight:bold; letter-spacing:0.3pt"> </span><span
                     style="font-size:7.5pt; font-weight:bold">PM)</span></p>
               </td>
            </tr>
            <tr style="height:12.75pt">
               <td colspan="2"
                  style="width:78.45pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:14.7pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Temperature</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span
                     style="font-size:7pt; font-weight:bold">(</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span
                     style="font-size:7pt; font-weight:bold">C</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.15pt"> </span><span
                     style="font-size:7pt; font-weight:bold">)</span></p>
               </td>
               <td colspan="2"
                  style="width:77.2pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:20.2pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Pressure</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.35pt"> </span><span
                     style="font-size:7pt; font-weight:bold">(Psi)</span></p>
               </td>
               <td colspan="2"
                  style="width:78.45pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:24.2pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Ampere</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.3pt"> </span><span
                     style="font-size:7pt; font-weight:bold">(A)</span></p>
               </td>
               <td style="width:77.9pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:27.4pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Coil</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.25pt"> </span><span
                     style="font-size:7pt; font-weight:bold">Evap</span></p>
               </td>
               <td colspan="3"
                  style="width:77.65pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:19.05pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Coil</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.4pt"> </span><span
                     style="font-size:7pt; font-weight:bold">Condensor</span></p>
               </td>
               <td colspan="3"
                  style="width:77.65pt; border-style:solid; border-width:1.5pt 1.5pt 0.75pt; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:19.05pt; line-height:7.8pt"><span
                     style="font-size:7pt; font-weight:bold">Bak</span><span
                     style="font-size:7pt; font-weight:bold; letter-spacing:-0.4pt"> </span><span
                     style="font-size:7pt; font-weight:bold">Drain</span></p>
               </td>
         
            </tr>
           <tr style="height:80px;">
    <td colspan="2" style="width:75.78pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotoparameter_after1 && file_exists(public_path('gambar/' . $Acs->fotoparameter_after1)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotoparameter_after1))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
    <td colspan="2" style="width:75.78pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotoparameter_after2 && file_exists(public_path('gambar/' . $Acs->fotoparameter_after2)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotoparameter_after2))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
    <td colspan="2" style="width:75.78pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotoparameter_after3 && file_exists(public_path('gambar/' . $Acs->fotoparameter_after3)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotoparameter_after3))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
    <td style="width:75.78pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotokomponen_after1 && file_exists(public_path('gambar/' . $Acs->fotokomponen_after1)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotokomponen_after1))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
    <td colspan="3" style="width:77.65pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotokomponen_after2 && file_exists(public_path('gambar/' . $Acs->fotokomponen_after2)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotokomponen_after2))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
    <td colspan="3" style="width:77.65pt; border-style:solid; border-width:0.75pt 0.75pt 0.75pt 1.5pt; vertical-align:top; height:80px; text-align:center;">
        @if($Acs->fotokomponen_after3 && file_exists(public_path('gambar/' . $Acs->fotokomponen_after3)))
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $Acs->fotokomponen_after3))) }}" alt="Image" style="width:100%; height:80px; object-fit:cover;">
        @else
            <span style="font-size:12pt; font-weight:bold;">N/A</span>
        @endif
    </td>
</tr>
            <tr style="height:2.4pt">
               <td colspan="2"
                  style="width:78.45pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top; background-color:#b6dee8">
                  <p class="TableParagraph" style="font-size:1pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="2"
                  style="width:78.45pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top; background-color:#b6dee8">
                  <p class="TableParagraph" style="font-size:1pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="3"
                  style="width:77.65pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top; background-color:#b6dee8">
                  <p class="TableParagraph" style="font-size:1pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
            </tr>
            <tr style="height:11.6pt">
               <td colspan="13" style="width:488.1pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph"
                     style="margin-top:0.6pt; margin-right:194.45pt; margin-left:196.4pt; text-align:center; font-size:7pt">
                     <span style="font-family:Arial; font-weight:bold; color:#ffffff">CATATAN</span><span
                        style="font-family:Arial; font-weight:bold; letter-spacing:-0.5pt; color:#ffffff">
                     </span><span style="font-family:Arial; font-weight:bold; color:#ffffff">TEKNISI</span>
                  </p>
               </td>
            </tr>
            <tr style="height:9.15pt">
               <td colspan="6"
                  style="width:237.1pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom:0.75pt solid #ffffff; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.15pt; line-height:8.15pt"><span
                     style="font-size:7.5pt">Temuan</span><span style="font-size:7.5pt; letter-spacing:0.25pt">
                     </span><span style="font-size:7.5pt">Saat</span><span
                        style="font-size:7.5pt; letter-spacing:0.15pt"> </span><span
                        style="font-size:7.5pt">PM</span><span style="font-size:7.5pt; letter-spacing:0.2pt">
                     </span><span style="font-size:7.5pt">: {{$Acs->temuan}}</span>
                  </p>
               </td>
               <td colspan="7"
                  style="width:248pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom:0.75pt solid #ffffff; vertical-align:top">
                  <p class="TableParagraph" style="margin-left:1.6pt; line-height:8.15pt"><span
                     style="font-size:7.5pt">Rekomendasi</span><span
                     style="font-size:7.5pt; letter-spacing:0.35pt"> </span><span
                     style="font-size:7.5pt">: {{$Acs->rekomendasi}}</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.1pt; border-top:0.75pt solid #ffffff; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom:0.75pt solid #ffffff; vertical-align:top">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="7"
                  style="width:248pt; border-top:0.75pt solid #ffffff; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom:0.75pt solid #ffffff; vertical-align:top">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
            </tr>
            <tr style="height:9.3pt">
               <td colspan="6"
                  style="width:237.1pt; border-top:0.75pt solid #ffffff; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom:0.75pt solid #ffffff; vertical-align:top">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="7"
                  style="width:248pt; border-top:0.75pt solid #ffffff; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom:0.75pt solid #ffffff; vertical-align:top">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
            </tr>
            <tr style="height:9.4pt">
               <td colspan="6"
                  style="width:237.1pt; border-top:0.75pt solid #ffffff; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
               <td colspan="7"
                  style="width:248pt; border-top:0.75pt solid #ffffff; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; vertical-align:top">
                  <p class="TableParagraph" style="font-size:6pt"><span
                     style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
               </td>
            </tr>
            <tr style="height:11.6pt">
               <td colspan="13" style="width:488.1pt; vertical-align:top; background-color:#000000">
                  <p class="TableParagraph"
                     style="margin-top:0.6pt; margin-right:194.5pt; margin-left:196.4pt; text-align:center; font-size:7pt">
                     <span style="font-family:Arial; font-weight:bold; color:#ffffff">APPROVAL</span>
                  </p>
               </td>
            </tr>
           <tr style="height:49.4pt">
<td colspan="6"
    style="width:237.1pt; border-right-style:solid; border-right-width:1.5pt; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top; text-align:left">
    
    <p class="TableParagraph" style="margin-top:0.45pt; margin-right:38.9pt; margin-left:1pt; line-height:138%; font-size:6pt">
        <span>Created by</span><span style="letter-spacing:-0.05pt"> </span><span>Team Leader</span><span style="letter-spacing:-0.1pt"> </span><span>:</span><span style="letter-spacing:-0.05pt"> </span><span>{{$Acs->created_by}}</span>
        <span style="width:39.34pt; font-family:'Times New Roman'; display:inline-block; -aw-tabstop-align:left; -aw-tabstop-pos:120.55pt">&#xa0;</span>
        <span>Rev. &amp; Aprv. by SPV : {{$Acs->approved_by}}</span>
        <span style="letter-spacing:0.05pt"> </span><span>Created Date</span><span style="letter-spacing:-0.05pt"> </span><span>: {{$Acs->date_completed}}</span>
        <span style="width:26.74pt; font-family:'Times New Roman'; display:inline-block">&#xa0;</span>
        <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Approval Date : {{$Acs->approved_date}}</span>
    </p>
    <br>

 <div style="display: flex; justify-content: space-between; align-items: center;">
    <?php
    if (!empty($teamlead->sign)) {
        echo '<img src="data:image/png;base64,' . base64_encode(file_get_contents(public_path($teamlead->sign))) . '" height="40" alt="Tanda Tangan">';
    } else {
        echo '<p>Belum Ditandatangani</p>';
    }
    ?>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php
    if (!empty($spv->sign)) {
        echo '<img src="data:image/png;base64,' . base64_encode(file_get_contents(public_path($spv->sign))) . '" height="40" alt="Tanda Tangan">';
    } else {
        echo '<img src="data:image/png;base64,' . base64_encode(file_get_contents(public_path($teamlead->sign))) . '" height="40" alt="Tanda Tangan">';
    }
    ?>
</div>


    
    <!-- Signed -->

</td>


   <td colspan="2"
      style="width:118.88pt; border-right:0.75pt solid #ffffff; border-left-style:solid; border-left-width:1.5pt; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top; text-align:left">
      <p class="TableParagraph" style="margin-top:0.45pt; margin-left:1.45pt; font-size:6pt">
         <span>Customer</span><span style="letter-spacing:-0.05pt"> </span><span>Notes</span><span style="letter-spacing:0.05pt"> </span><span>: {{$Acs->customer_note}}</span>
      </p>
   </td>
   <td colspan="5"
      style="width:128.38pt; border-right-style:solid; border-right-width:1.5pt; border-left:0.75pt solid #ffffff; border-bottom-style:solid; border-bottom-width:1.5pt; vertical-align:top; text-align:left">
      <p class="TableParagraph" style="margin-top:0.45pt; margin-left:1.35pt; font-size:6pt">
         <span>PIC</span><span style="letter-spacing:-0.05pt"> </span><span>Customer</span><span style="letter-spacing:-0.05pt"> </span><span>:</span>
      </p>
      <p class="TableParagraph" style="margin-top:2.8pt; margin-left:1.35pt; font-size:6pt">
         <span>Sign</span><span style="letter-spacing:0.05pt"> </span><span>Cust.</span><span style="letter-spacing:-0.05pt"> </span><span>Date</span><span style="letter-spacing:-0.05pt"> </span><span>:</span>
      </p>
      <p class="TableParagraph" style="font-size:6pt">
         <span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span>
      </p>
      <p class="TableParagraph" style="font-size:6pt">
         <span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span>
      </p>
      <p class="TableParagraph" style="margin-top:0.5pt; font-size:6pt">
         <span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span>
      </p>
      <p class="TableParagraph" style="margin-top:0.05pt; margin-left:41.3pt; font-size:7.5pt">
         <span>(</span><span style="width:69.13pt; font-family:'Lucida Console'; text-decoration:underline; display:inline-block; -aw-font-family:'Times New Roman'; -aw-tabstop-align:left; -aw-tabstop-pos:112.7pt">&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;</span><span>)</span>
      </p>
      
   </td>
</tr>

            <tr style="height:0pt">
               <td style="width:76.9pt"></td>
               <td style="width:3.05pt"></td>
               <td style="width:39.6pt"></td>
               <td style="width:39.1pt"></td>
               <td style="width:40.5pt"></td>
               <td style="width:39.45pt"></td>
               <td style="width:79.4pt"></td>
               <td style="width:40.6pt"></td>
               <td style="width:19.85pt"></td>
               <td style="width:18.7pt"></td>
               <td style="width:41.1pt"></td>
               <td style="width:27.6pt"></td>
               <td style="width:22.25pt"></td>
            </tr>
         </table>
      </div>
   </body>
</html>