<html>
   <head>
      <meta http-equiv=Content-Type content="text/html; charset=utf-8">
      <meta name=Generator content="Microsoft Word 15 (filtered)">
      <style>
         /* Font Definitions */
         @font-face {
         font-family: "Cambria Math";
         panose-1: 2 4 5 3 5 4 6 3 2 4;
         }
         @font-face {
         font-family: Calibri;
         panose-1: 2 15 5 2 2 2 4 3 2 4;
         }
         @font-face {
         font-family: "Segoe UI Symbol";
         panose-1: 2 11 5 2 4 2 4 2 2 3;
         }
         @font-face {
         font-family: "Arial MT";
         }
         /* Style Definitions */
         p.MsoNormal,
         li.MsoNormal,
         div.MsoNormal {
         margin: 0in;
         text-autospace: none;
         font-size: 11.0pt;
         font-family: "Calibri", sans-serif;
         }
         p.TableParagraph,
         li.TableParagraph,
         div.TableParagraph {
         mso-style-name: "Table Paragraph";
         margin: 0in;
         text-autospace: none;
         font-size: 11.0pt;
         font-family: "Calibri", sans-serif;
         }
         .MsoChpDefault {
         font-family: "Calibri", sans-serif;
         }
         .MsoPapDefault {
         text-autospace: none;
         }
         @page WordSection1 {
         size: 816.0pt 1056.0pt;
         margin: 59.0pt 94.0pt 14.0pt 117.0pt;
         }
         div.WordSection1 {
         page: WordSection1;
         }
         @page WordSection2 {
         size: 816.0pt 1056.0pt;
         margin: 59.0pt 94.0pt 14.0pt 117.0pt;
         }
         div.WordSection2 {
         page: WordSection2;
         }
      </style>
   </head>
   <body lang=EN-US style='word-wrap:break-word'>
      <div class=WordSection1>
         <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
            style='margin-left:23.5pt;border-collapse:collapse;border:none'>
            <tr style='height:18.4pt'>
               <td width=769 colspan=8 rowspan="" valign=top style='width:576.5pt;border:solid black 2.25pt; 
                  border-bottom:none;padding:0in 0in 0in 0in;height:18.4pt'>
                  <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('banner.png'))) }}" height="118 " alt="">
               </td>
            </tr>
           
            <tr style='height:14.0pt'>
               <td width=103 colspan=2 valign=top style='width:77.05pt;border-top:solid black 2.25pt; 
                  border-left:solid black 2.25pt;border-bottom:none;border-right:none;
                  padding:0in 0in 0in 0in;height:14.0pt'>
                  <p class=TableParagraph style='margin-left:1.75pt;line-height:12.05pt'><span
                     style='position:relative;z-index:-1660249088'><span style='left:0px;
                     position:absolute;left:1px;top:-97px;width:768px;height:62px'><img width=768 height=62
                     src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('2.png'))) }}"></span></span>Form<span
                     style='letter-spacing:-.1pt'> </span><span style='letter-spacing:-.25pt'>No.</span></p>
               </td>
              <td width="97" valign="top" style="
    width:72.6pt;
    border:none;
    border-top:solid black 2.25pt;
    padding:0in 0in 0in 0in;
    height:14.0pt;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
">
    <p class="TableParagraph" style="margin-left:1.05pt; line-height:12.05pt;">
        : <?php
        $jenis = [
            1 => "AC Split",
            2 => "Cooled Water Chiller",
            // ... (jenis lainnya)
        ];

        $singkatan1 = isset($jenis[$equipment->jenis]) ? 
            substr(str_replace(' ', '', ucwords(strtolower($jenis[$equipment->jenis]))), 0, 3) : '';
        $singkatan2 = strtoupper($history->type);
        $bulan = strtoupper($history->created_at->format('m'));
        $tahun = strtoupper($history->created_at->format('y'));
        $formattedId = sprintf('%05d', $equipment->id);
        $formattedId2 = sprintf('%04d', $ServiceReport->id);

        echo strtoupper($singkatan1 . '-' . $singkatan2 . '-' . $formattedId . '-' . $formattedId2);
        ?>
    </p>
</td>

               <td width=174 valign=top style='width:130.6pt;border:none;border-top:solid black 2.25pt;
                  padding:0in 0in 0in 0in;height:14.0pt'>
                  <p class=TableParagraph style='margin-left:39.0pt;line-height:12.85pt'><span
                     style='letter-spacing:-.1pt'>Supervisor</span></p>
               </td>
               <td width=59 valign=top colspan="2" style='width:44.35pt;border:none;padding:0in 0in 0in 0in; border-top:solid black 2.25pt;border-right:solid black 2.25pt; 
                  height:14.0pt'>
                  <p class=TableParagraph style='margin-left:2.65pt;line-height:12.05pt'>: {{$ServiceReport->approved_by}}</p>
               </td>
           
<td colspan="2" valign="middle" style="
    width:307.85pt; /* Total lebar gabungan */
    border:none;
    border-right:solid black 2.25pt;
    border-top:solid black 2.25pt;
    padding:0;
    height:14.0pt;
    background:black; /* Latar belakang hitam */
    text-align: center; /* Teks di tengah secara horizontal */
    vertical-align: middle; /* Teks di tengah secara vertikal */
">
    <p class="TableParagraph" style="
        margin: 0; /* Hilangkan margin bawaan */
        color: white; /* Warna teks putih */
        font-size: 12.0pt; /* Ukuran font */
        font-weight: bold; /* Membuat teks tebal */
    ">
        STATUS APPROVAL
    </p>
</td>

            </tr>
            <tr style='height:14.3pt'>
               <td width=103 colspan=2 valign=top style='width:77.05pt;border:none; 
                  border-left:solid black 2.25pt;padding:0in 0in 0in 0in;height:14.3pt'>
                  <p class=TableParagraph style='margin-left:1.75pt;line-height:13.3pt'>Created<span
                     style='letter-spacing:2.2pt'> </span><span style='letter-spacing:-.2pt'>Date</span></p>
               </td>
               <td width=97 valign=top style='width:72.6pt;border:none;padding:0in 0in 0in 0in; 
                  height:14.3pt'>
                  <p class=TableParagraph style='margin-left:1.05pt;line-height:12.6pt'>: {{$ServiceReport->tanggal_survey}}</p>
               </td>
               <td width=174 valign=top style='width:130.6pt;border:none;padding:0in 0in 0in 0in; 
                  height:14.3pt'>
                  <p class=TableParagraph style='margin-left:39.0pt;line-height:13.3pt'>Team <span
                     style='letter-spacing:-.1pt'>Leader</span></p>
               </td>
               <td width=59 colspan="2" valign=top style='width:44.35pt;border:none;padding:0in 0in 0in 0in;  border-right:solid rgb(9, 8, 8) 2.25pt;
                  height:14.3pt'>
                  <p class=TableParagraph style='margin-left:2.65pt;line-height:12.6pt'>: {{$ServiceReport->created_by}}</p>
               </td>
            <td width="59" colspan="2" rowspan="2" valign="top" style="
    width:44.35pt;
    border:none;
    padding:0in 0in 0in 0in;
    border-right:solid rgb(9, 8, 8) 2.25pt;
    height:14.3pt;
    text-align: center; /* Sesuaikan alignment jika diperlukan */
">
    <h1 style="
        color: green;
        margin: 0; /* Hilangkan margin bawaan */
        margin-top:5px;
        font-size: 16px; /* Sesuaikan ukuran agar tetap sesuai dengan tabel */
    ">
        {{$history->approval}}
    </h1>
</td>
            </tr>
            <tr style='height:13.7pt'>
               <td width=103 colspan=2 valign=top style='width:77.05pt;border:none;
                  border-left:solid black 2.25pt;padding:0in 0in 0in 0in;height:13.7pt'>
                  <p class=TableParagraph style='margin-top:.2pt;margin-right:0in;margin-bottom:
                     0in;margin-left:1.75pt;margin-bottom:.0001pt;line-height:12.5pt'>Modified<span style='letter-spacing:-.35pt'>
                     </span><span style='letter-spacing:-.2pt'>Date</span>
                  </p>
               </td>
               <td width=97 valign=top style='width:72.6pt;border:none;padding:0in 0in 0in 0in;
                  height:13.7pt'>
                  <p class=TableParagraph style='margin-left:1.05pt;line-height:12.35pt'>: {{$ServiceReport->date_completed}}</p>
               </td>
               <td width=174 valign=top style='width:130.6pt;border:none;padding:0in 0in 0in 0in;
                  height:13.7pt'>
                  <p class=TableParagraph style='margin-left:39.0pt;line-height:12.35pt'>Technician<span
                     style='letter-spacing:-.4pt'> </span><span style='letter-spacing:-.2pt'>List</span></p>
               </td>
               <td colspan="2" width=59 valign=top style='width:44.35pt;border:none;padding:0in 0in 0in 0in;  border-right:solid rgb(9, 8, 8) 2.25pt;
                  height:13.7pt'>
                  <p class=TableParagraph style='margin-left:2.65pt;line-height:12.35pt'>: {{$ServiceReport->engineer_list}}</p>
               </td>
            </tr>
            <tr style='height:16.95pt'>
               <td width=508 colspan=6 valign=top style='width:380.65pt;border-top:none;
                  border-left:solid black 2.25pt;border-bottom:none;border-right:solid black 2.25pt;
                  background:black;padding:0in 0in 0in 0in;height:16.95pt'>
                  <p class=TableParagraph align=center style='margin-top:1.2pt;margin-right:
                     0in;margin-bottom:0in;margin-left:2.35pt;margin-bottom:.0001pt;text-align:
                     center'><b><span style='color:white'>EQUIPMENT<span style='letter-spacing:
                     -.35pt'> </span><span style='letter-spacing:-.1pt'>PROFILE</span></span></b></p>
               </td>
              <td width="261" colspan="2" valign="middle" style="
    width:195.85pt;
    border:none;
    border-right:solid black 2.25pt;
    background:black;
    padding:0;
    height:16.95pt;
    text-align: center; /* Teks di tengah secara horizontal */
    vertical-align: middle; /* Teks di tengah secara vertikal */
">
    <p class="TableParagraph" style="
        margin: 0; /* Hilangkan margin bawaan */
        color: white; /* Warna teks putih */
        font-weight: bold; /* Teks tebal */
    ">
        <span style="letter-spacing:-0.05pt;">
            TINDAK LANJUT DARI LAPORAN
        </span>
    </p>
</td>

            </tr>
         <tr style="height:13.55pt">
   <td colspan="2" style="width:77.05pt;border:none;border-left:solid black 2.25pt;padding:0;height:13.55pt">
      <p class="TableParagraph" style="margin-left:1.75pt;line-height:12.25pt">
         <span style="letter-spacing:-.1pt">Customer</span>
      </p>
   </td>
   <td style="width:72.6pt;border:none;padding:0;height:13.55pt">
      <p class="TableParagraph" style="margin-left:1.05pt;line-height:12.25pt">: {{$equipment->customer}}</p>
   </td>
   <td style="width:130.6pt;border:none;padding:0;background-color:rgb(255, 255, 255);height:13.55pt">
      <p class="TableParagraph" style="margin-left:39.0pt;line-height:12.25pt">
         <span style="letter-spacing:-.1pt">Kapasitas</span>
      </p>
   </td>
   <td style="width:44.35pt;border:none;padding:0;height:13.55pt">
      <p class="TableParagraph" style="margin-left:2.65pt;line-height:12.25pt">: &nbsp;{{$equipment->kapasitas}}</p>
   </td>
   <td style="width:56.05pt;border:none;border-right:solid black 2.25pt;padding:0;height:13.55pt; ">
      <p class="TableParagraph">
         <span style="font-size:10pt;font-family:'Times New Roman',serif">&nbsp;</span>
      </p>
   </td>
<td colspan="2" rowspan="2" style="
    width:195.85pt;
    border:none;
    border-right:solid black 2.25pt;
    padding:0;
    height:13.55pt;
    text-align: center; /* Teks di tengah secara horizontal */
    vertical-align: middle; /* Teks di tengah secara vertikal */
">
    <p class="TableParagraph" style="
        margin: 0; /* Hilangkan margin untuk memastikan properti tengah bekerja */
    ">
        <b>
            <span style="font-size:12pt;font-family:'Arial',sans-serif;">
                {{$ServiceReport->jenis_survey}}
            </span>
        </b>
    </p>
</td>

</tr>
<tr style="height:14.1pt">
   <td style="width:20.8pt;border:none;border-left:solid black 2.25pt;padding:0;height:14.1pt">
      <p class="TableParagraph" style="text-align:center;line-height:12.75pt">
         <span style="letter-spacing:-.2pt">Site</span>
      </p>
   </td>
   <td style="width:56.25pt;border:none;padding:0;height:14.1pt">
      <p class="TableParagraph">
         <span style="font-size:10pt;font-family:'Times New Roman',serif">&nbsp;</span>
      </p>
   </td>
   <td style="width:72.6pt;border:none;padding:0;height:14.1pt">
      <p class="TableParagraph" style="margin-left:1.05pt;line-height:12.75pt">:&nbsp;{{$equipment->area}}</p>
   </td>
   <td style="width:130.6pt;border:none;padding:0;height:14.1pt">
      <p class="TableParagraph" style="margin-left:39.0pt;line-height:12.75pt">Name <span style="letter-spacing:-.1pt">Plate</span></p>
   </td>
   <td style="width:44.35pt;border:none;padding:0;height:14.1pt">
      <p class="TableParagraph" style="margin-left:2.65pt;line-height:12.75pt">:  &nbsp;{{$equipment->nameplate}}</p>
   </td>
   <td style="width:56.05pt;border:none;border-right:solid black 2.25pt;padding:0;height:14.1pt;">
      <p class="TableParagraph">
         <span style="font-size:10pt;font-family:'Times New Roman',serif">&nbsp;</span>
      </p>
   </td>
</tr>

               <tr style='height:16.95pt bac'>
               <td width=103 colspan=2 valign=top style='width:77.05pt;border:none;
                  border-left:solid black 2.25pt;padding:0in 0in 0in 0in;height:16.95pt'>
                  <p class=TableParagraph style='font-size:9pt; margin-top:.25pt;margin-right:-1.45pt;
                     margin-bottom:0in;margin-left:1.75pt;margin-bottom:.0001pt'>Area Site - Room
                  </p>
               </td>
               <td width=97 valign=top style='width:72.6pt;border:none;padding:0in 0in 0in 0in;
                  height:16.95pt'>
                  <p class=TableParagraph style='margin-top:.25pt;margin-right:0in;margin-bottom:
                     0in;margin-left:1.05pt;margin-bottom:.0001pt'>:&nbsp;{{$equipment->site}} - {{$equipment->room}}</p>
               </td>
              <td width=174 valign=top style='width:130.6pt;border:none;padding:0in 0in 0in 0in;
                  height:14.1pt'>
                  <p class=TableParagraph style='margin-left:39.0pt;line-height:12.75pt'>Tahun Pembuatan <span
                     style='letter-spacing:-.1pt'></span></p>
               </td>
               <td width=59 valign=top style='width:44.35pt;border:none;padding:0in 0in 0in 0in;
                  height:16.95pt'>
                  <p class=TableParagraph style='margin-top:.25pt;margin-right:0in;margin-bottom:
                     0in;margin-left:2.65pt;margin-bottom:.0001pt'>:&nbsp;{{$equipment->tahun_pembuatan}}</p>
               </td>
               <td width=75 valign=top style='width:56.05pt;border:none;border-right:solid black 2.25pt;
                  padding:0in 0in 0in 0in;height:16.95pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=261 colspan=2 valign=top style='width:195.85pt;border:none; 
                  border-right:solid black 2.25pt;background:rgb(252, 252, 252);padding:0in 0in 0in 0in;
                  height:16.95pt'>
               
               </td>
            </tr>
            <tr style='height:16.95pt bac'>
               <td width=103 colspan=2 valign=top style='width:77.05pt;border:none;
                  border-left:solid black 2.25pt;padding:0in 0in 0in 0in;height:16.95pt'>
                  <p class=TableParagraph style='font-size:9pt; margin-top:.25pt;margin-right:-1.45pt;
                     margin-bottom:0in;margin-left:1.75pt;margin-bottom:.0001pt'>ID SI-PM
                  </p>
               </td>
               <td width=97 valign=top style='width:72.6pt;border:none;padding:0in 0in 0in 0in;
                  height:16.95pt'>
                  <p class=TableParagraph style='margin-top:.25pt;margin-right:0in;margin-bottom:
                     0in;margin-left:1.05pt;margin-bottom:.0001pt'>:&nbsp;{{$equipment->id_combine}}</p>
               </td>
              <td width=174 valign=top style='width:130.6pt;border:none;padding:0in 0in 0in 0in;
                  height:14.1pt'>
                  <p class=TableParagraph style='margin-left:39.0pt;line-height:12.75pt'>Tahun Install <span
                     style='letter-spacing:-.1pt'></span></p>
               </td>
               <td width=59 valign=top style='width:44.35pt;border:none;padding:0in 0in 0in 0in;
                  height:16.95pt'>
                  <p class=TableParagraph style='margin-top:.25pt;margin-right:0in;margin-bottom:
                     0in;margin-left:2.65pt;margin-bottom:.0001pt'>: {{$equipment->tahun_installasi}}</p>
               </td>
               <td width=75 valign=top style='width:56.05pt;border:none;border-right:solid black 2.25pt;
                  padding:0in 0in 0in 0in;height:16.95pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
        <td width="261" colspan="2" valign="middle" style="
    width:195.85pt;
    border:none;
    border-right:solid black 2.25pt;
    background:black;
    padding:0;
    height:16.95pt;
    text-align: center; /* Teks di tengah secara horizontal */
    vertical-align: middle; /* Teks di tengah secara vertikal */
">
    <p class="TableParagraph" style="
        margin: 0; /* Hilangkan margin bawaan */
        color: white; /* Warna teks putih */
        font-weight: bold; /* Teks tebal */
    ">
        <span style="letter-spacing:-0.1pt;">DEFECT LEVEL</span>
    </p>
</td>

            </tr>
            <tr style='height:13.55pt'>
               <td width=103 colspan=2 valign=top style='width:77.05pt;border:none;
                  border-left:solid black 2.25pt;padding:0in 0in 0in 0in;height:13.55pt'>
                  <p class=TableParagraph style='font-size:9pt;margin-left:1.75pt;line-height:12.25pt'>Jenis<span
                     style='letter-spacing:-.15pt'> </span><span style='letter-spacing:-.25pt'>Equipment</span></p>
               </td>
               <td width=97 valign=top style='width:72.6pt;border:none;padding:0in 0in 0in 0in;
                  height:13.55pt'>
                  <p class=TableParagraph style='margin-left:1.05pt;line-height:12.25pt'>: @if($equipment->jenis == 1)
                    {{ "AC Split" }}
                    @elseif($equipment->jenis == 2)
                    {{ "Cooled Water Chiller" }}
                    @elseif($equipment->jenis == 3)
                    {{ "AHUP" }}
                    @elseif($equipment->jenis == 4)
                    {{ "PAC" }}
                    @elseif($equipment->jenis == 5)
                    {{ "Cold Storage" }}
                    @elseif($equipment->jenis == 6)
                    {{ "Cooling Unit & AC Panel" }}
                    @elseif($equipment->jenis == 7)
                    {{ "Mini Chiller" }}
                    @elseif($equipment->jenis == 8)
                    {{ "Evaporative Air Cooler" }}
                    @elseif($equipment->jenis == 9)
                    {{ "AHU" }}
                    @elseif($equipment->jenis == 10)
                    {{ "Cooling tower" }}
                    @elseif($equipment->jenis == 11)
                    {{ "Humidifier" }}
                    @elseif($equipment->jenis == 12)
                    {{ "Dehumidifier" }}
                    @elseif($equipment->jenis == 13)
                    {{ "FCU (Fan Cooling Unit)" }}
                    @elseif($equipment->jenis == 14)
                    {{ "Exhaust Fan" }}
                    @elseif($equipment->jenis == 15)
                    {{ "Pompa" }}
                    @elseif($equipment->jenis == 16)
                    {{ "Spot Cooling" }}
                    @elseif($equipment->jenis == 17)
                    {{ "Water Mist" }}
                    @elseif($equipment->jenis == 18)
                    {{ "Chiller Centrifugal" }}
                    @elseif($equipment->jenis == 19)
                    {{ "Floor Standing" }}
                    @elseif($equipment->jenis == 20)
                    {{ "Ac Cassette" }}
                    @elseif($equipment->jenis == 21)
                    {{ "Split Duct" }}
                    @elseif($equipment->jenis == 22)
                    {{ "Air Cooled Chiller" }}
                    @elseif($equipment->jenis == 23)
                    {{ "Centralize Chiller" }}
                    @elseif($equipment->jenis == 24)
                    {{ "Ultrasonic Humidifier" }}
                    @elseif($equipment->jenis == 25)
                    {{ "Piping & Accs" }}
                    @elseif($equipment->jenis == 26)
                    {{ "Panel SCR" }}
                    @elseif($equipment->jenis == 27)
                    {{ "ATCS" }}
                    @elseif($equipment->jenis == 28)
                    {{ "Lakos Filter" }}
                    @endif</p>
               </td>
               <td width=174 valign=top style='width:130.6pt;border:none;padding:0in 0in 0in 0in;
                  height:13.55pt'>
                  <p class=TableParagraph style='margin-left:39.0pt;line-height:12.25pt'>Equipment<span
                     style='letter-spacing:-.1pt'> Notes</span></p>
               </td>
               <td width=59 valign=top style='width:44.35pt;border:none;padding:0in 0in 0in 0in;
                  height:13.55pt'>
                  <p class=TableParagraph style='margin-left:2.65pt;line-height:12.25pt'>: {{$equipment->other}}</p>
               </td>
               <td width=75 valign=top style='width:56.05pt;border:none;border-right:solid black 2.25pt;
                  padding:0in 0in 0in 0in;height:13.55pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=261 colspan=2 rowspan=2 valign=top style='width:195.85pt;
                  border:none;border-right:solid black 2.25pt;padding:0in 0in 0in 0in;
                  height:13.55pt'>
                  <p class=TableParagraph align=center style='margin-top:7.55pt;margin-right:
                     65.3pt;margin-bottom:0in;margin-left:67.65pt;margin-bottom:.0001pt;
                     text-align:center'><b><span style='font-size:10.0pt;font-family:"Arial",sans-serif;
                     letter-spacing:-.2pt'>HIGH</span></b></p>
               </td>
            </tr>
            <tr style='height:14.1pt'>
               <td width=103 colspan=2 valign=top style='width:77.05pt;border:none; 
                  border-left:solid black 2.25pt;padding:0in 0in 0in 0in;height:14.1pt'>
                  <p class=TableParagraph style='font-size:10pt; margin-left:1.75pt;line-height:12.75pt'>Brand</p>
               </td>
               <td width=97 valign=top style='width:72.6pt;border:none;padding:0in 0in 0in 0in; 
                  height:14.1pt'>
                  <p class=TableParagraph style='margin-left:1.05pt;line-height:12.75pt'>: {{$equipment->brand}}</p>
               </td>
               <td width=59 valign=top style='width:44.35pt;border:none;padding:0in 0in 0in 0in; 
                  height:14.1pt'>
                  <p class=TableParagraph style='margin-left:2.65pt;line-height:12.75pt'></p>
               </td>
               <td width=75 valign=top style='width:56.05pt;border:none; 
                  padding:0in 0in 0in 0in;height:14.1pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=75 valign=top style='width:56.05pt;border:none;border-right:solid black 2.25pt; 
                  padding:0in 0in 0in 0in;height:14.1pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
            </tr>
            <tr style='height:16.95pt'>
               <td width=103 colspan=2 valign=top style='width:77.05pt;border:none; 
                  border-left:solid black 2.25pt;padding:0in 0in 0in 0in;height:16.95pt'>
                  <p class=TableParagraph style='margin-top:.25pt;margin-right:0in;margin-bottom:
                     0in;margin-left:1.75pt;margin-bottom:.0001pt'><span style='letter-spacing:
                     -.1pt'>Type / Model</span></p>
               </td>
               <td width=97 valign=top style='width:72.6pt;border:none;padding:0in 0in 0in 0in;
                  height:16.95pt'>
                  <p class=TableParagraph style='margin-top:.25pt;margin-right:0in;margin-bottom:
                     0in;margin-left:1.05pt;margin-bottom:.0001pt'>: {{$equipment->model}}</p>
               </td>
               <td width=174 valign=top style='width:130.6pt;border:none;padding:0in 0in 0in 0in;
                  height:16.95pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=59 valign=top style='width:44.35pt;border:none;padding:0in 0in 0in 0in;
                  height:16.95pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=75 valign=top style='width:56.05pt;border:none;border-right:solid black 2.25pt;
                  padding:0in 0in 0in 0in;height:16.95pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=261 colspan=2 valign=top style='width:195.85pt;border:none;
                  border-right:solid black 2.25pt;background:black;padding:0in 0in 0in 0in;
                  height:16.95pt'>
                  <p class=TableParagraph align=center style='margin-top:1.2pt;margin-right:
                     65.75pt;margin-bottom:0in;margin-left:67.65pt;margin-bottom:.0001pt;
                     text-align:center'><b><span style='color:white'>DEFECT<span style='letter-spacing:
                     .1pt'> </span><span style='letter-spacing:-.2pt'>TYPE</span></span></b></p>
               </td>
            </tr>
            <tr style='height:13.2pt'>
               <td width=103 colspan=2 valign=top style='width:77.05pt;border:none;
                  border-left:solid black 2.25pt;padding:0in 0in 0in 0in;height:13.2pt'>
                  <p class=TableParagraph style='margin-left:1.75pt;line-height:12.25pt'>Serial<span
                     style='letter-spacing:-.05pt'> </span><span style='letter-spacing:.1pt'> </span><span
                     style='letter-spacing:-.1pt'>No.</span></p>
               </td>
               <td width=97 valign=top style='width:72.6pt;border:none;padding:0in 0in 0in 0in;
                  height:13.2pt'>
                  <p class=TableParagraph style='margin-left:1.05pt;line-height:12.25pt'>: {{$equipment->serial_number}}</p>
               </td>
               <td width=174 valign=top style='width:130.6pt;border:none;padding:0in 0in 0in 0in;
                  height:13.2pt'>
                  <p class=TableParagraph><span
                     style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=59 valign=top style='width:44.35pt;border:none;padding:0in 0in 0in 0in;
                  height:13.2pt'>
                  <p class=TableParagraph><span
                     style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=75 valign=top style='width:56.05pt;border:none;border-right:solid black 2.25pt;
                  padding:0in 0in 0in 0in;height:13.2pt'>
                  <p class=TableParagraph><span
                     style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
      <td width="261" colspan="2" rowspan="2" valign="middle" style="
    width:195.85pt;
    border:none;
    border-right:solid black 2.25pt;
    padding:0;
    height:13.2pt;
    text-align: center; /* Teks di tengah secara horizontal */
    vertical-align: middle; /* Teks di tengah secara vertikal */
">
    <p class="TableParagraph" style="
        margin: 0; /* Hilangkan margin bawaan */
        font-size: 10.0pt; /* Ukuran font */
        font-family: 'Arial', sans-serif; /* Jenis font */
        font-weight: bold; /* Teks tebal */
        letter-spacing: -0.1pt; /* Menyesuaikan jarak antar huruf */
    ">
        {{$ServiceReport->defect_type}}
    </p>
</td>

            </tr>
            <tr style='height:13.75pt'>
               <td width=103 colspan=2 valign=top style='width:77.05pt;border:none;
                  border-left:solid black 2.25pt;padding:0in 0in 0in 0in;height:13.75pt'>
                  <p class=TableParagraph style='margin-left:1.75pt;line-height:12.45pt'>
                     <span style='letter-spacing:-.25pt'></span>
                  </p>
               </td>
               <td width=97 valign=top style='width:72.6pt;border:none;padding:0in 0in 0in 0in;
                  height:13.75pt'>
                  <p class=TableParagraph style='margin-left:1.05pt;line-height:12.45pt'></p>
               </td>
               <td width=174 valign=top style='width:130.6pt;border:none;padding:0in 0in 0in 0in;
                  height:13.75pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=59 valign=top style='width:44.35pt;border:none;padding:0in 0in 0in 0in;
                  height:13.75pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=75 valign=top style='width:56.05pt;border:none;border-right:solid black 2.25pt;
                  padding:0in 0in 0in 0in;height:13.75pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
            </tr>
            <tr style='height:16.3pt'>
               <td width=28 valign=top style='width:20.8pt;border:none;border-left:solid black 2.25pt;
                  background:black;padding:0in 0in 0in 0in;height:16.3pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=75 valign=top style='width:56.25pt;border:none;background:black;
                  padding:0in 0in 0in 0in;height:16.3pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
               <td width=271 colspan=2 valign=top style='width:203.2pt;border:none;
                  background:black;padding:0in 0in 0in 0in;height:16.3pt'>
                  <p class=TableParagraph style='margin-top:.85pt;margin-right:0in;margin-bottom:
                     0in;margin-left:42.15pt;margin-bottom:.0001pt'><b><span style='color:white'>TASK<span style='letter-spacing:.1pt'>
                     </span><span style='letter-spacing:-.2pt'>LIST</span></span></b>
                  </p>
               </td>
               <td width=59 valign=top style='width:44.35pt;border:none;background:black;
                  padding:0in 0in 0in 0in;height:16.3pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
            <td width="336" colspan="3" valign="middle" style="
    width:251.9pt;
    border:none;
    border-right:solid black 2.25pt;
    background:rgb(0, 0, 0);
    padding:0;
    height:16.3pt;
    text-align: center; /* Teks di tengah secara horizontal */
    vertical-align: middle; /* Teks di tengah secara vertikal */
">
    <p class="TableParagraph" style="
        margin: 0; /* Hilangkan margin bawaan */
        color: white; /* Warna teks putih */
        font-weight: bold; /* Teks tebal */
    ">
        <span style="letter-spacing:-0.1pt;">TROUBLE DESCRIPTION</span>
    </p>
</td>

            </tr>
            <tr style='height:12.3pt'>
              <td width="28" valign="middle" style="
      width:20.8pt;
      border:none;
      border-left:solid black 2.25pt;
      padding:0;
      height:12.3pt;
      text-align: center; /* Checkbox di tengah secara horizontal */
      vertical-align: middle; /* Checkbox di tengah secara vertikal */
   ">
      @if($ServiceReport->c1 == 1)
      <span style="font-family: DejaVu Sans; font-size: 18px;">&#9745;</span>
      @endif
   </td>
   <td width="172" colspan="4" valign="middle" style="
      width:128.85pt;
      border:none;
     
                              border-right:solid black 2.25pt;
      padding:0;
      height:12.3pt;
      text-align: left; /* Teks sejajar kiri */
      vertical-align: middle; /* Teks sejajar tengah */
   ">
      <p class="TableParagraph" style="
         margin: 0; /* Hilangkan margin bawaan */
         
         padding-left: 5px; /* Tambahkan padding untuk jarak */
         line-height: 1.2; /* Sesuaikan jarak antar baris */
         font-size:10.0pt;
         font-family: Arial, sans-serif;
         color: black; /* Warna teks untuk visibilitas */
      ">
         1. Intensive Safety Briefing
      </p>  
   </td>
               <td width=395 colspan=3 rowspan=8 valign=top style='width:296.25pt; background-color:rgb(255, 255, 255); 
                  border:none;border-right:solid black 2.25pt;padding:0in 0in 0in 0in;
                  height:12.3pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif;margin-left:10px;'>{{$ServiceReport->deskripsi}}</span></p>
               </td>
            </tr>
            <tr style='height:14.45pt'>
                     <td width="28" valign="middle" style="
                              width:20.8pt;
                              border:none;
                              border-left:solid black 2.25pt;
                              padding:0;
                              height:12.3pt;
                              text-align: center; /* Checkbox di tengah secara horizontal */
                              vertical-align: middle; /* Checkbox di tengah secara vertikal */
                           ">
                              @if($ServiceReport->c2 == 1)
                              <span style="font-family: DejaVu Sans; font-size: 18px;">&#9745;</span>
                              @endif
                           </td>
                           <td width="172" colspan="4" valign="middle" style=" 
                              width:128.85pt;
                              border:none;border-right:solid black 2.25pt;
                              
                              padding:0;
                              height:12.3pt;
                              text-align: left; /* Teks sejajar kiri */
                              vertical-align: middle; /* Teks sejajar tengah */
                           ">
                              <p class="TableParagraph" style="
                                 margin: 0; /* Hilangkan margin bawaan */
                                 
                                 padding-left: 5px; /* Tambahkan padding untuk jarak */
                                 line-height: 1.2; /* Sesuaikan jarak antar baris */
                                 font-size:10.0pt;
                                 font-family: Arial, sans-serif;
                                 color: black; /* Warna teks untuk visibilitas */
                              ">
                                 2. Memastikan tools teknisi memadai
                              </p>  
                           </td>
            </tr>
            <tr style='height:14.55pt'>
                              <td width="28" valign="middle" style="
                              width:20.8pt;
                              border:none;
                              border-left:solid black 2.25pt;
                              padding:0;
                              height:12.3pt;
                              text-align: center; /* Checkbox di tengah secara horizontal */
                              vertical-align: middle; /* Checkbox di tengah secara vertikal */
                           ">
                              @if($ServiceReport->c3 == 1)
                              <span style="font-family: DejaVu Sans; font-size: 18px;">&#9745;</span>
                              @endif
                           </td>
                           <td width="172" colspan="4" valign="middle" style="
                              width:128.85pt;
                              border:none;border-right:solid black 2.25pt;
                             
                              padding:0;
                              height:12.3pt;
                              text-align: left; /* Teks sejajar kiri */
                              vertical-align: middle; /* Teks sejajar tengah */
                           ">
                              <p class="TableParagraph" style="
                                 margin: 0; /* Hilangkan margin bawaan */
                                 
                                 padding-left: 5px; /* Tambahkan padding untuk jarak */
                                 line-height: 1.2; /* Sesuaikan jarak antar baris */
                                 font-size:10.0pt;
                                 font-family: Arial, sans-serif;
                                 color: black; /* Warna teks untuk visibilitas */
                              ">
                                3. Memastikan APD & Permit-JSA lengkap
                              </p>  
                           </td>
            </tr>
            <tr style='height:14.45pt'>
                <td width="28" valign="middle" style="
                              width:20.8pt;
                              border:none;
                              border-left:solid black 2.25pt;
                              padding:0;
                              height:12.3pt;
                              text-align: center; /* Checkbox di tengah secara horizontal */
                              vertical-align: middle; /* Checkbox di tengah secara vertikal */
                           ">
                              @if($ServiceReport->c4 == 1)
                              <span style="font-family: DejaVu Sans; font-size: 18px;">&#9745;</span>
                              @endif
                           </td>
                           <td width="172" colspan="4" valign="middle" style="
                              width:128.85pt;
                              border:none;border-right:solid black 2.25pt;
                             
                              padding:0;
                              height:12.3pt;
                              text-align: left; /* Teks sejajar kiri */
                              vertical-align: middle; /* Teks sejajar tengah */
                           ">
                              <p class="TableParagraph" style="
                                 margin: 0; /* Hilangkan margin bawaan */
                                 
                                 padding-left: 5px; /* Tambahkan padding untuk jarak */
                                 line-height: 1.2; /* Sesuaikan jarak antar baris */
                                 font-size:10.0pt;
                                 font-family: Arial, sans-serif;
                                 color: black; /* Warna teks untuk visibilitas */
                              ">
                                4. Dokumen penunjang memadai (jika dibutuhkan)
                              </p>  
                           </td>
            </tr>
            <tr style='height:14.35pt'>
                 <td width="28" valign="middle" style="
                              width:20.8pt;
                              border:none;
                              border-left:solid black 2.25pt;
                              padding:0;
                              height:12.3pt;
                              text-align: center; /* Checkbox di tengah secara horizontal */
                              vertical-align: middle; /* Checkbox di tengah secara vertikal */
                           ">
                              @if($ServiceReport->c5 == 1)
                              <span style="font-family: DejaVu Sans; font-size: 18px;">&#9745;</span>
                              @endif
                           </td>
                           <td width="172" colspan="4" valign="middle" style="
                              width:128.85pt;
                              border:none;border-right:solid black 2.25pt;
                             
                              padding:0;
                              height:12.3pt;
                              text-align: left; /* Teks sejajar kiri */
                              vertical-align: middle; /* Teks sejajar tengah */
                           ">
                              <p class="TableParagraph" style="
                                 margin: 0; /* Hilangkan margin bawaan */
                                 
                                 padding-left: 5px; /* Tambahkan padding untuk jarak */
                                 line-height: 1.2; /* Sesuaikan jarak antar baris */
                                 font-size:10.0pt;
                                 font-family: Arial, sans-serif;
                                 color: black; /* Warna teks untuk visibilitas */
                              ">
                                5. Mencatat data parameter equipment
                              </p>  
                           </td>
            </tr>
            <tr style='height:14.35pt'>
                 <td width="28" valign="middle" style="
                              width:20.8pt;
                              border:none;
                              border-left:solid black 2.25pt;
                              padding:0;
                              height:12.3pt;
                              text-align: center; /* Checkbox di tengah secara horizontal */
                              vertical-align: middle; /* Checkbox di tengah secara vertikal */
                           ">
                              @if($ServiceReport->c6 == 1)
                              <span style="font-family: DejaVu Sans; font-size: 18px;">&#9745;</span>
                              @endif
                           </td>
                           <td width="172" colspan="4" valign="middle" style="
                              width:128.85pt;
                              border:none;
                              border-right:solid black 2.25pt;
                             
                              padding:0;
                              height:12.3pt;
                              text-align: left; /* Teks sejajar kiri */
                              vertical-align: middle; /* Teks sejajar tengah */
                           ">
                              <p class="TableParagraph" style="
                                 margin: 0; /* Hilangkan margin bawaan */
                                 
                                 padding-left: 5px; /* Tambahkan padding untuk jarak */
                                 line-height: 1.2; /* Sesuaikan jarak antar baris */
                                 font-size:10.0pt;
                                 font-family: Arial, sans-serif;
                                 color: black; /* Warna teks untuk visibilitas */
                              ">
                                 6. Mencatat laporan/keluhan teknis user
                              </p>  
                           </td>
            </tr>
            <tr style='height:13.9pt'>
                 <td width="28" valign="middle" style="
                              width:20.8pt;
                              border:none;
                              border-left:solid black 2.25pt;
                              padding:0;
                              height:12.3pt;
                              text-align: center; /* Checkbox di tengah secara horizontal */
                              vertical-align: middle; /* Checkbox di tengah secara vertikal */
                           ">
                              @if($ServiceReport->c7 == 1)
                              <span style="font-family: DejaVu Sans; font-size: 18px;">&#9745;</span>
                              @endif
                           </td>
                           <td width="172" colspan="4" valign="middle" style="
                              width:128.85pt;
                              border:none;border-right:solid black 2.25pt;
                             
                              padding:0;
                              height:12.3pt;
                              text-align: left; /* Teks sejajar kiri */
                              vertical-align: middle; /* Teks sejajar tengah */
                           ">
                              <p class="TableParagraph" style="
                                 margin: 0; /* Hilangkan margin bawaan */
                                 
                                 padding-left: 5px; /* Tambahkan padding untuk jarak */
                                 line-height: 1.2; /* Sesuaikan jarak antar baris */
                                 font-size:10.0pt;
                                 font-family: Arial, sans-serif;
                                 color: black; /* Warna teks untuk visibilitas */
                              ">
                                7. Melakukan survey dengan aman, menyeluruh, dan terukur
                              </p>  
                           </td>
            </tr>
            <tr style='height:15.2pt'>
                 <td width="28" valign="middle" style="
                              width:20.8pt;
                              border:none;
                              border-left:solid black 2.25pt;
                              padding:0;
                              height:12.3pt;
                              text-align: center; /* Checkbox di tengah secara horizontal */
                              vertical-align: middle; /* Checkbox di tengah secara vertikal */
                           ">
                              @if($ServiceReport->c8 == 1)
                              <span style="font-family: DejaVu Sans; font-size: 18px;">&#9745;</span>
                              @endif
                           </td>
                           <td width="172" colspan="4" valign="middle" style="
                              width:128.85pt;
                              border:none;border-right:solid black 2.25pt;
                             
                              padding:0;
                              height:12.3pt;
                              text-align: left; /* Teks sejajar kiri */
                              vertical-align: middle; /* Teks sejajar tengah */
                           ">
                              <p class="TableParagraph" style="
                                 margin: 0; /* Hilangkan margin bawaan */
                                 
                                 padding-left: 5px; /* Tambahkan padding untuk jarak */
                                 line-height: 1.2; /* Sesuaikan jarak antar baris */
                                 font-size:10.0pt;
                                 font-family: Arial, sans-serif;
                                 color: black; /* Warna teks untuk visibilitas */
                              ">
                                8. Melakukan analisa, tindakan, dan rekomendasi
                              </p>  
                           </td>
            </tr>
            <tr style='height:16.0pt'>
               <td width=769 colspan=8 valign=top style='width:576.5pt;border-top:none;
                  border-left:solid black 2.25pt;border-bottom:none;border-right:solid black 2.25pt;
                  background:black;padding:0in 0in 0in 0in;height:16.0pt'>
                  <p class=TableParagraph align=center style='margin-top:1.8pt;margin-right:
                     105.45pt;margin-bottom:0in;margin-left:107.6pt;margin-bottom:.0001pt;
                     text-align:center'><b><span style='font-size:10.0pt;font-family:"Arial",sans-serif;
                     color:white'>CATATAN<span style='letter-spacing:-.6pt'> </span><span
                     style='letter-spacing:-.1pt'>TEKNISI</span></span></b></p>
               </td>
            </tr>
            <tr style='height:13.55pt'>
               <td width=769 colspan=8 valign=top style='width:576.5pt;border-top:none;
                  border-left:solid black 2.25pt;border-bottom:none;border-right:
                  solid black 2.25pt;padding:0in 0in 0in 0in;height:13.55pt'>
                  <p class=TableParagraph style='margin-left:1.75pt;line-height:12.6pt'>Action<span
                     style='letter-spacing:-.15pt'> </span><span style='letter-spacing:-.5pt'>: {{$ServiceReport->tindakan}}</span></p>
               </td>
            </tr>
            <tr style='height:13.55pt'>
               <td width=769 colspan=8 valign=top style='width:576.5pt;border-top:none;
                  border-left:solid black 2.25pt;border-bottom:none;border-right:
                  solid black 2.25pt;padding:0in 0in 0in 0in;height:13.55pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
            </tr>
            <tr style='height:13.55pt'>
               <td width=769 colspan=8 valign=top style='width:576.5pt;border-top:none;
                  border-left:solid black 2.25pt;border-bottom:none;border-right:
                  solid black 2.25pt;padding:0in 0in 0in 0in;height:13.55pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
            </tr>
            <tr style='height:15.95pt'>
               <td width=769 colspan=8 valign=top style='width:576.5pt;border-top:solid black 1.0pt;
                  border-left:solid black 2.25pt;border-bottom:none;border-right:
                  solid black 2.25pt;padding:0in 0in 0in 0in;height:15.95pt'>
                  <p class=TableParagraph style='margin-top:1.65pt;margin-right:0in;margin-bottom:
                     0in;margin-left:1.75pt;margin-bottom:.0001pt;line-height:13.3pt'><span
                     style='position:relative;z-index:-1660248064'><span style='left:0px;
                     position:absolute;left:1px;top:-2px;width:768px;height:5px'></span></span>Rekomendasi<span
                     style='letter-spacing:-.35pt'> </span>Teknisi<span style='letter-spacing:
                     -.25pt'> </span>Lapangan<span style='letter-spacing:-.35pt'> </span><span style='letter-spacing:-.5pt'>: {{$ServiceReport->rekomendasi_teknisi_lapangan}}</span></p>
               </td>
            </tr>
            <tr style='height:13.55pt'>
               <td width=769 colspan=8 valign=top style='width:576.5pt;border-top:none;
                  border-left:solid black 2.25pt;border-bottom:none;border-right:
                  solid black 2.25pt;padding:0in 0in 0in 0in;height:13.55pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
            </tr>
            <tr style='height:13.55pt'>
               <td width=769 colspan=8 valign=top style='width:576.5pt;border-top:none;
                  border-left:solid black 2.25pt;border-bottom:none;border-right:
                  solid black 2.25pt;padding:0in 0in 0in 0in;height:13.55pt'>
                  <p class=TableParagraph><span
                     style='font-size:10.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
            </tr>
            <tr style='height:13.05pt'>
               <td width=769 colspan=8 valign=top style='width:576.5pt;border-top:none;
                  border-left:solid black 2.25pt;border-bottom:none;border-right:
                  solid black 2.25pt;padding:0in 0in 0in 0in;height:13.05pt'>
                  <p class=TableParagraph><span
                     style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
            </tr>
            <tr style='height:15.0pt'>
               <td width=769 colspan=8 valign=top style='width:576.5pt;border-top:none;
                  border-left:solid black 2.25pt;border-bottom:none;border-right:solid black 2.25pt;
                  background:black;padding:0in 0in 0in 0in;height:15.0pt'>
                  <p class=TableParagraph align=center style='margin-top:0in;margin-right:105.5pt;
                     margin-bottom:0in;margin-left:107.6pt;margin-bottom:.0001pt;text-align:center;
                     line-height:13.15pt'><b><span style='color:white'>LIST<span style='letter-spacing:
                     -.15pt'> </span>KEBUTUHAN<span style='letter-spacing:-.05pt'> </span>PART/MATERIAL
                     &amp;<span style='letter-spacing:.05pt'> </span><span style='letter-spacing:
                        -.2pt'>JASA</span></span></b>
                  </p>
               </td>
            </tr>
            <tr style='height:13.55pt'>
               <td width=28 valign=top style='width:20.8pt;border-top:none;border-left:solid black 2.25pt;
                  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 0in 0in 0in;
                  height:13.55pt'>
                  <p class=TableParagraph align=center style='margin-left:2.2pt;text-align:
                     center;line-height:12.6pt'><span style='letter-spacing:-.25pt'>No</span></p>
               </td>
               <td width=172 colspan=2 valign=top style='width:128.85pt;border-top:none;
                  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
                  padding:0in 0in 0in 0in;height:13.55pt'>
                  <p class=TableParagraph style='margin-left:45.1pt;line-height:12.6pt'><span
                     style='letter-spacing:-.1pt'>Deskripsi</span></p>
               </td>
               <td width=174 valign=top style='width:130.6pt;border-top:none;border-left:
                  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
                  padding:0in 0in 0in 0in;height:13.55pt'>
                  <p class=TableParagraph style='margin-left:20.45pt;line-height:12.6pt'>Model/Part<span
                     style='letter-spacing:-.25pt'> </span><span style='letter-spacing:-.1pt'>Number</span></p>
               </td>
               <td width=59 valign=top style='width:44.35pt;border-top:none;border-left:
                  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
                  padding:0in 0in 0in 0in;height:13.55pt'>
                  <p class=TableParagraph style='margin-left:14.8pt;line-height:12.6pt'><span
                     style='letter-spacing:-.25pt'>Qty</span></p>
               </td>
               <td width=336 colspan=3 valign=top style='width:251.9pt;border-top:none;
                  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 2.25pt;
                  padding:0in 0in 0in 0in;height:13.55pt'>
                  <p class=TableParagraph align=center style='margin-left:2.9pt;text-align:
                     center;line-height:12.6pt'><span style='letter-spacing:-.1pt'>Keterangan</span></p>
               </td>
            </tr>
            @foreach ($list as $index => $data)
            <tr style="height:13.55pt">
               <td width="28" valign="middle" style="
                  width:20.8pt;
                  border-top:none;
                  border-left:solid black 2.25pt;
                  border-bottom:solid black 1.0pt;
                  border-right:solid black 1.0pt;
                  padding:0;
                  height:13.55pt;
                  text-align: center; /* Teks di tengah secara horizontal */
               ">
                  <p class="TableParagraph" style="margin: 0;">
                     <span style="font-size:10.0pt;font-family:'Times New Roman',serif">{{$index+1}}</span>
                  </p>
               </td>
               <td width="172" colspan="2" valign="middle" style="
                  width:128.85pt;
                  border-top:none;
                  border-left:none;
                  border-bottom:solid black 1.0pt;
                  border-right:solid black 1.0pt;
                  padding:0;
                  height:13.55pt;
                  text-align: left; /* Teks rata kiri */
               ">
                  <p class="TableParagraph" style="margin: 0;">
                     <span style="font-size:10.0pt;font-family:'Times New Roman',serif">{{$data->deskripsilist}}</span>
                  </p>
               </td>
               <td width="174" valign="middle" style="
                  width:130.6pt;
                  border-top:none;
                  border-left:none;
                  border-bottom:solid black 1.0pt;
                  border-right:solid black 1.0pt;
                  padding:0;
                  height:13.55pt;
                  text-align: left; /* Teks rata kiri */
               ">
                  <p class="TableParagraph" style="margin: 0;">
                     <span style="font-size:10.0pt;font-family:'Times New Roman',serif">{{$data->modelpart}}</span>
                  </p>
               </td>
               <td width="59" valign="middle" style="
                  width:44.35pt;
                  border-top:none;
                  border-left:none;
                  border-bottom:solid black 1.0pt;
                  border-right:solid black 1.0pt;
                  padding:0;
                  height:13.55pt;
                  text-align: center; /* Teks di tengah secara horizontal */
               ">
                  <p class="TableParagraph" style="margin: 0;">
                     <span style="font-size:10.0pt;font-family:'Times New Roman',serif">{{$data->qty}}</span>
                  </p>
               </td>
               <td width="336" colspan="3" valign="middle" style="
                  width:251.9pt;
                  border-top:none;
                  border-left:none;
                  border-bottom:solid black 1.0pt;
                  border-right:solid black 2.25pt;
                  padding:0;
                  height:13.55pt;
                  text-align: center; /* Teks rata kiri */
               ">
                  <p class="TableParagraph" style="margin: 0;">
                     <span style="font-size:10.0pt;font-family:'Times New Roman',serif">{{$data->keterangan}}</span>
                  </p>
               </td>
            </tr>

            @endforeach
            <tr style='height:13.4pt'>
               <td width=769 colspan=8 valign=top style='width:576.5pt;border:solid black 2.25pt;
                  border-top:none;background:black;padding:0in 0in 0in 0in;height:13.4pt'>
                  <p class=TableParagraph><span
                     style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
               </td>
            </tr>
          <tr style="height:88.6pt">
   <!-- Kolom Kiri: Created by Team Leader, Created At, Signed -->
<td width="187" colspan="3" valign="top" style="width:140.125pt; border:solid black 2.25pt; border-top:none; padding:0; height:88.6pt;">
   <!-- Created by Team Leader -->
   <p class="TableParagraph" style="margin-top:3.55pt; margin-left:1.4pt; font-size:9.0pt; line-height:132%;">
      Created by Team Leader: {{$ServiceReport->created_by}}
   </p>
   
   <!-- Created Date -->
   <p class="TableParagraph" style="margin-top:1.0pt; margin-left:1.4pt; font-size:9.0pt;">
      Created Date: {{$ServiceReport->tanggal_survey}}
   </p>
   
   <!-- Signed -->
   <?php
if (!empty($teamlead->sign)) {
    echo '<img src="data:image/png;base64,' . base64_encode(file_get_contents(public_path($teamlead->sign))) . '" height="118" alt="Tanda Tangan">';
} else {
    echo '<p>Belum Ditandatangani</p>';
}
?>
</td>


   <!-- Kolom Tengah: Rev. & Aprv. by SPV, Approval Date, Sign -->
<td width="187" colspan="2" valign="top" style="width:140.125pt; border-top:none; border-left:none; border-bottom:solid black 2.25pt; border-right:solid black 1.0pt; padding:0; height:88.6pt;">
   <!-- Rev. & Aprv. by SPV -->
   <p class="TableParagraph" style="margin-top:3.55pt; margin-left:1.75pt; font-size:9.0pt;">
      Rev. & Aprv. by SPV: {{$ServiceReport->approved_by}}
   </p>
   
   <!-- Approval Date -->
   <p class="TableParagraph" style="margin-top:1.0pt; margin-left:1.75pt; font-size:9.0pt;">
      Approval Date: {{$ServiceReport->approved_date}}
   </p>
   
   <!-- Sign -->
   <p class="TableParagraph" style="margin-top:7.55pt; font-size:9.0pt; margin-left:1.75pt;">
    <?php
if (!empty($spv->sign)) {
    echo '<img src="data:image/png;base64,' . base64_encode(file_get_contents(public_path($spv->sign))) . '" height="118" alt="Tanda Tangan">';
} else {
    echo '<p>Belum Ditandatangani</p>';
}
?>

   </p>
</td>


   <!-- Kolom Tengah: Customer Notes -->
   <td width="150" colspan="2" valign="top" style="width:169.25pt; border-top:none; border-left:none; border-bottom:solid black 2.25pt; border-right:solid black 1.0pt; padding:0; height:88.6pt;">
      <p class="TableParagraph" style="margin-top:3.55pt; margin-right:0; margin-bottom:0; margin-left:1.25pt; font-size:9.0pt;">
         Customer Notes:
      </p>
   </td>

   <!-- Kolom Kanan: PIC Customer, Sign Cust. Date -->
 <td width="169" valign="top" style="width:127.0pt; border-top:none; border-left:none; border-bottom:solid black 2.25pt; border-right:solid black 2.25pt; padding:0; height:88.6pt;">
   <!-- PIC Customer -->
   <p class="TableParagraph" style="margin-top:3.55pt; margin-left:1.75pt; font-size:9.0pt;">
      PIC Customer: 
   </p>
   
   <!-- Sign Cust. -->
   <p class="TableParagraph" style="margin-top:1.0pt; margin-left:1.75pt; font-size:9.0pt;">
      Sign Cust. Date: 
   </p>
   <p class="TableParagraph" style="margin-top:24.55pt; font-size:9.0pt; margin-left:1.75pt;">
      (_________________)
   </p>
</td>

</tr>

         </table>
      </div>
      <span style='font-size:11.0pt;font-family:"Calibri",sans-serif'><br clear=all style='page-break-before:always'>
      </span>
      <div class=WordSection2>
         <p class=MsoNormal style='margin-top:.15pt'><span style='font-size:1.0pt;
            font-family:"Times New Roman",serif'>&nbsp;</span></p>
       <style>
    .page-break {
        page-break-after: always;
    }
</style>
<div class="page-break"></div>

  <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
            style='margin-left:23.5pt;border-collapse:collapse;border:none'>
              <tr style='height:16.0pt'>
               <td width=768 colspan=3 valign=top style='width:576.15pt;border-top:none;
                  border-left:solid black 2.25pt;border-bottom:none;border-right:solid black 2.25pt;
                  background:black;padding:0in 0in 0in 0in;height:16.0pt'>
                  <p class=TableParagraph align=center style='margin-top:0in;margin-right:98.3pt;
                     margin-bottom:0in;margin-left:100.6pt;margin-bottom:.0001pt;text-align:center;
                     line-height:12.7pt'><b><span style='color:white'>LAMPIRAN<span style='letter-spacing:-.2pt'> </span>1.<span
                     style='letter-spacing:-.1pt'> </span>FOTO
                     GAMBAR KERUSAKAN EQUIPMENT</span></b>
                  </p>
               </td>
            </tr>
    @php
        $columns = 3;  // Menentukan jumlah kolom per baris
        $counter = 0;  // Menginisialisasi penghitung kolom
    @endphp
    
    @foreach ($gambar as $key => $item)
        @if ($counter % $columns == 0)
            @if ($counter != 0)
                </tr> <!-- Menutup baris sebelumnya -->
            @endif
              <tr style='height:13.75pt'>
        @endif
        
        <td width=248 valign=top style='width:230.8pt;border-top:solid black 2.25pt;border-left:
                  solid black 2.25pt;border-bottom:none;border-right:solid black 2.25pt;
                  background:#BEBEBE;padding:0in 0in 0in 0in;height:13.75pt'>
            <p class=TableParagraph align=center style='margin-top:10px;margin-right:65.0pt;
                     margin-bottom:0in;margin-left:67.85pt;margin-bottom:.0001pt;text-align:center;
                     line-height:12.25pt'><span style='color:black'>GAMBAR <span style='letter-spacing:
                     .05pt'> </span><span style='letter-spacing:-.5pt'> {{ $key + 1 }}</span></span></p>
                     <hr>
            
            <!-- Menampilkan gambar menggunakan Base64 -->
              <div style="text-align:center;">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar/'. $item->gambar))) }}" 
                     height="118" alt="Gambar {{ $key + 1 }}">
            </div>        <hr>
            <p>&nbsp;&nbsp;Nama Komponen : {{ $item->keterangan2 }}</p> <!-- Menampilkan info -->
            <p>&nbsp;&nbsp;Info : {{ $item->keterangan }}</p> <!-- Menampilkan info -->
            <p>&nbsp;&nbsp;Keterangan : {{ $item->info }}</p> <!-- Menampilkan keterangan -->
        </td>

        @php
            $counter++; // Menambah penghitung kolom
        @endphp
    @endforeach
    
    @if ($counter % $columns != 0)
        </tr> <!-- Menutup baris terakhir jika kolom tidak penuh -->
    @endif
</table>


         <p class=MsoNormal style='margin-top:.4pt;margin-right:0in;margin-bottom:.05pt;
            margin-left:0in'><span style='font-size:11.5pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
         <table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0"
       style="margin-left:23.5pt; border-collapse:collapse; border:none">
    <tr style="height:16.0pt">
        <td width="768" colspan="3" valign="top" 
            style="width:576.15pt; border-top:none; border-left:solid black 2.25pt; border-bottom:none; 
                   border-right:solid black 2.25pt; background:black; padding:0in 0in 0in 0in; height:16.0pt">
            <p class="TableParagraph" align="center" style="margin-top:0in; margin-right:98.3pt; 
                margin-bottom:0in; margin-left:100.6pt; margin-bottom:.0001pt; text-align:center; line-height:12.7pt">
                <b><span style="color:white">LAMPIRAN 2. FOTO PENGUKURAN PARAMETER SETELAH SELESAI TROUBLESHOOT</span></b>
            </p>
        </td>
    </tr>
    @php
        $columns = 3;  // Set number of columns per row
        $counter = 0;  // Initialize counter for column
        $parameters = ['Suhu', 'Tekanan', 'Arus Listrik']; // Define the parameters
    @endphp
    
    @foreach ($gambar2 as $key => $item)
        @if ($counter % $columns == 0)
            @if ($counter != 0)
                </tr> <!-- Close previous row -->
            @endif
            <tr style="height:13.75pt">
        @endif
        
        <td width="248" valign="top" 
            style="width:230.8pt; border-top:solid black 2.25pt; border-left:solid black 2.25pt; 
                   border-bottom:solid black; border-right:solid black 2.25pt; background:#BEBEBE; padding:0in 0in 0in 0in; height:13.75pt">
         
         <p class="TableParagraph" align="center" style="margin-top:10px; margin-right:65.0pt; 
                margin-bottom:0in; margin-left:67.85pt; margin-bottom:.0001pt; text-align:center; line-height:12.25pt">
                <span style="color:black">GAMBAR {{ $key + 1 }}</span>
            </p>
            <hr>
            <!-- Display image with Base64 encoding -->
           <div style="text-align:center;">
                <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('gambar2/'. $item->gambar))) }}" 
                     height="118" alt="Gambar {{ $key + 1 }}">
            </div>
            <hr>
            
            <!-- Display the specific parameter and its value -->
            <p>&nbsp;&nbsp;Parameter : {{ $parameters[$counter % 3] }}</p> <!-- Show the current parameter (Suhu, Tekanan, Arus Listrik) -->
            <p>&nbsp;&nbsp;Nilai : {{ $item->keterangan2 }}</p> <!-- Show the value -->
            <p>&nbsp;&nbsp;Info : {{ $item->keterangan }}</p> <!-- Display additional info -->
            <p>&nbsp;&nbsp;Keterangan : {{ $item->info }}</p> <!-- Display more info -->

        </td>

        @php
            $counter++; // Increment the column counter
        @endphp
    @endforeach
    
    @if ($counter % $columns != 0)
        </tr> <!-- Close the last row if columns are not filled -->
    @endif
</table>

         <p class=MsoNormal>&nbsp;</p>
      </div>
   </body>
</html>