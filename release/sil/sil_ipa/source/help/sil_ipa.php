<?php
  $pagename = 'IPA (SIL) Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
    #section2 td p a {
      text-decoration: none; color: blue
    }
    #section2 td h1 { font: bold 16pt Tahoma; color: #4444cc }
    #section2 td h2 { font: bold 14pt Tahoma; color: #4444cc }
    #section2 td h3 { font: bold 12pt Tahoma; color: #4444cc }
    #section2 td span.key { font: bold 10pt Verdana; padding: 0 4px; border: solid 1px #aaaaaa; margin: 0 4px; }
    td {valign=top border:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;}
    .row  {font: 9pt Arial,sans-serif; }
    .column  {font: bold 9pt Arial,sans-serif; text-align: center; align: center;}
    .glyph  {font: 14pt Charis,serif; text-align: left; align: center;}
    .glyphgreen  {font: 12pt Charis,serif; color: green; text-align: left; align: center;}
    .key {font: 10pt Courier New,serif; color: red; text-align: left; align: center;}
END;
  require_once('header.php');
?>

<h2>Desktop Keyboard Layout</h2>

<p>The keyboard layout is described in terms of an IPA chart
rather than a keyboard. This is because many base characters are typed as a sequence of a letter followed by one of &lt;, &gt;,  = or | which are characters used to change a base character to another base character.
Diacritics are typed as sequences of an appropriate key. <span style='color:blue'>Blue denotes non-IPA sanctioned phonetic symbols (they may
be used by other traditions such as Americanist, Chinese or Russian).</span></p>

<p>As described above (and below), the default for this keyboard is to type a letter followed by a "modifier". 
	For example, this sequence "b>" would produce "ɓ". If you wish to use the opposite sequence (>b) that is 
	possible. Use one or the other of these options. <b>Do not turn <i>Before</i> on with Keyman configuration 
  and off with the RALT hotkeys.</b> </p>

<ol>
	<li><b>Using Keyman Configuration</b>: On Windows, go to <b>Keyman Configuration</b>, 
	select the keyboard, click on <b>Keyboard options</b> and choose <b>Before</b>. 
	You may need to exit Keyman configuration before the default behavior changes. This method will change your default to <i>Before</i> and 
	everytime you switch to this keyboard it will remain using the <i>Before</i> style until you change it back to <i>After</i> style using <b>Keyman configuration</b>.</li>
<li><b>Using RALT hotkeys</b>: It is also possible to switch from <i>After</i> to <i>Before</i> using the RALT HYPHEN sequence (RALT+-). 
	Switch back to <i>After</i> using the RALT EQUAL sequence (RALT+=) (RALT+SHIFT+= on a German keyboard). 
	This method will change to <i>Before</i> during just this session of 
	using the keyboard. After you stop using the keyboard it will return to <i>After</i>.</li>
</ol>

<h3>Consonants</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "b>" would produce "ɓ".</p>

<table border=0 cellspacing=0 cellpadding=0 width=0
 style='width:440.35pt;margin-left:3.0pt;border-collapse:collapse'>
 <tr style='page-break-inside:avoid'>
  <td width=63 style='width:46.9pt;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>&nbsp;</p>
  </td>
  <td width=42 colspan=2 style='width:31.6pt;border:none;border-top:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=column>Bilabial</p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=column>Labio-dental</p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=column>Dental</p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=column>Alveolar</p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=column>Post-alveolar</p>
  </td>
  <td width=50 colspan=2 style='width:37.85pt;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=column>Retroflex</p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=column>Palatal</p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=column>Velar</p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:none;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=column>Uvular</p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=column>Pharyngeal</p>
  </td>
  <td width=48 colspan=2 style='width:.5in;border-top:solid windowtext 2.25pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=column>Glottal</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:solid windowtext 1.0pt; border-left:solid windowtext 1.5pt;border-bottom:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>Plosive</p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-top:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa101" title="IPA:101, USV:0070">p</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>p</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa103" title="IPA:103, USV:0074">t</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>t</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa105" title="IPA:105, USV:0288">&#648;</a></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>t&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa107" title="IPA:107, USV:0063">c</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>c</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa109" title="IPA:109, USV:006B">k</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>k</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa111" title="IPA:111, USV:0071">q</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>q</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa113" title="IPA:113, USV:0294">&#660;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.0pt;border-left:
  none;border-bottom:none;border-right:solid windowtext 2.25pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>?=</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>&nbsp;</p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa102" title="IPA:102, USV:0062">b</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>b</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa104" title="IPA:104, USV:0064">d</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>d</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa106" title="IPA:106, USV:0256">&#598;</a></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>d&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa108" title="IPA:108, USV:025F">&#607;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>j=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa110" title="IPA:110, USV:0261">&#609;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>g&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa112" title="IPA:112, USV:0262">&#610;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>G=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>Nasal</p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa114" title="IPA:114, USV:006D">m</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>m</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa115" title="IPA:115, USV:0271">&#625;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>m&gt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa116" title="IPA:116, USV:006E">n</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>n</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa117" title="IPA:117, USV:0273">&#627;</a></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>n&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa118" title="IPA:118, USV:0272">&#626;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>n=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa119" title="IPA:119, USV:014B">&#331;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>n&gt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa120" title="IPA:120, USV:0274">&#628;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>N=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>Trill</p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa121" title="IPA:121, USV:0299">&#665;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>B=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa122" title="IPA:122, USV:0072">r</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>r</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa123" title="IPA:123, USV:0280">&#640;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>R=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>Tap or Flap</p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa???" title="IPA:???, USV:2C71">&#x2C71;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>v&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa124" title="IPA:124, USV:027E">&#638;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>r&gt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa125" title="IPA:125, USV:027D">&#637;</a></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>r&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>Fricative</p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa126" title="IPA:126, USV:0278">&#632;</a></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>f=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa128" title="IPA:128, USV:0066">f</a></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>f</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa130" title="IPA:130, USV:03B8">&#952;</a></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>t=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa132" title="IPA:132, USV:0073">s</a></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>s</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa134" title="IPA:134, USV:0283">&#643;</a></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>s=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa136" title="IPA:136, USV:0282">&#642;</a></p>
  </td>
  <td width=26 style='width:19.85pt;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>s&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa138" title="IPA:138, USV:00E7">ç</a></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>c=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa140" title="IPA:140, USV:0078">x</a></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>x</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa142" title="IPA:142, USV:03C7">&#967;</a></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>x=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa144" title="IPA:144, USV:0127">&#295;</a></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>h&gt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa146" title="IPA:146, USV:0068">h</a></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>h</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>&nbsp;</p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa127" title="IPA:127, USV:03B2">&#946;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>b=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa129" title="IPA:129, USV:0076">v</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>v</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa131" title="IPA:131, USV:00F0">ð</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>d=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa133" title="IPA:133, USV:007A">z</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>z</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa135" title="IPA:135, USV:0292">&#658;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>z=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa137" title="IPA:137, USV:0290">&#656;</a></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>z&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa139" title="IPA:139, USV:029D">&#669;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>j&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa141" title="IPA:141, USV:0263">&#611;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>g=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa143" title="IPA:143, USV:0281">&#641;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>R&gt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa145" title="IPA:145, USV:0295">&#661;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>?&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa147" title="IPA:147, USV:0266">&#614;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>h&lt;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:none;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>Lateral Fricative</p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa148" title="IPA:148, USV:026C">&#620;</a></p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>l=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=26 style='width:19.85pt;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-right:solid windowtext 2.25pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>&nbsp;</p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa149" title="IPA:149, USV:026E">&#622;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>l&gt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>Approximant</p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa150" title="IPA:150, USV:028B">&#651;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>v=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa151" title="IPA:151, USV:0279">&#633;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>r=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa152" title="IPA:152, USV:027B">&#635;</a></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>R&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa153" title="IPA:153, USV:006A">j</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>j</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa154" title="IPA:154, USV:0270">&#624;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>w&gt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=63 valign=top style='width:46.9pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=row>Lateral Approximant</p>
  </td>
  <td width=18 valign=top style='width:13.6pt;border:none;border-bottom:solid windowtext 2.25pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa155" title="IPA:155, USV:006C">l</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>l</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa156" title="IPA:156, USV:026D">&#621;</a></p>
  </td>
  <td width=26 style='width:19.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 1.0pt; padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>l&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa157" title="IPA:157, USV:028E">&#654;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>L&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph><a href="#ipa158" title="IPA:158, USV:029F">&#671;</a></p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>L=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 1.0pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 2.25pt;
  background:#DDDDDD;padding:0in 1.8pt 0in 1.8pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:none;border-left:none;border-bottom:
  solid windowtext 2.25pt;border-right:solid windowtext 2.25pt;background:#DDDDDD;
  padding:0in 1.8pt 0in 1.8pt'>
  <p class=key>&nbsp;</p>
  </td>
 </tr>
</table>

<p class=row>Where symbols appear in pairs, the bottom one represents a voiced consonant. Shaded areas denote articulations judged impossible.</p>

<h3>Other Consonants</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "=p" would produce "ʘ".</p>

<table border=1 cellspacing=0 cellpadding=0 width=0
 style='width:206.85pt;margin-left:3.0pt;border-collapse:collapse;border:
 none'>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=137 colspan=3 style='width:102.4pt;border:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=column>Clicks</p>
  </td>
  <td width=139 colspan=3 style='width:104.45pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=column>Voiced implosives</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph><a href="#ipa176" title="IPA:176, USV:0298">&#664;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>p=</p>
  </td>
  <td width=69 style='width:52.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=row>Bilabial</p>
  </td>
  <td width=33 valign=top style='width:25.1pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=glyph><a href="#ipa160" title="IPA:160, USV:0253">&#595;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>b&gt;</p>
  </td>
  <td width=70 style='width:52.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=row>Bilabial</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=glyph><a href="#ipa177" title="IPA:177, USV:01C0">&#448;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>!&lt;</p>
  </td>
  <td width=69 style='width:52.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=row>Dental</p>
  </td>
  <td width=33 valign=top style='width:25.1pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=glyph><a href="#ipa162" title="IPA:162, USV:0257">&#599;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>d&gt;</p>
  </td>
  <td width=70 style='width:52.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=row>Dental/alveolar</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph><a href="#ipa178" title="IPA:178, USV:01C3">&#451;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>!</p>
  </td>
  <td width=69 style='width:52.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=row>(Post)alveolar</p>
  </td>
  <td width=33 valign=top style='width:25.1pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=glyph><a href="#ipa164" title="IPA:164, USV:0284">&#644;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>j&gt;</p>
  </td>
  <td width=70 style='width:52.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=row>Palatal</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=glyph><a href="#ipa179" title="IPA:179, USV:01C2">&#450;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>!=</p>
  </td>
  <td width=69 style='width:52.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=row>Palatoalveolar</p>
  </td>
  <td width=33 valign=top style='width:25.1pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=glyph><a href="#ipa166" title="IPA:166, USV:0260">&#608;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>g&gt;</p>
  </td>
  <td width=70 style='width:52.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=row>Velar</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=31 valign=top style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=glyph><a href="#ipa180" title="IPA:180, USV:01C1">&#449;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>!&gt;</p>
  </td>
  <td width=69 style='width:52.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=row>Alveolar lateral</p>
  </td>
  <td width=33 valign=top style='width:25.1pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=glyph><a href="#ipa168" title="IPA:168, USV:029B">&#667;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>G&gt;</p>
  </td>
  <td width=70 style='width:52.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;padding:0in 5.4pt 0in 5.4pt;
  height:16.25pt'>
  <p class=row>Uvular</p>
  </td>
 </tr>
</table>


<h3>Other Symbols</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "=w" would produce "ʍ".</p>

<table border=1 cellspacing=0 cellpadding=0 width=0
 style='width:280.65pt;margin-left:3.0pt;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:solid windowtext 1.5pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt; border-right:none;padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=glyph><a href="#ipa169" title="IPA:169, USV:028D">&#653;</a></p>
  </td>
  <td width=52 style='width:39.05pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>w=</p>
  </td>
  <td width=105 style='width:79.05pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>Vl labial-velar fricative</p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=glyph><a href="#ipa182" title="IPA:182, USV:0255">&#597;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>c&lt;</p>
  </td>
  <td width=108 style='width:81.35pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>Vl alveolo-palatal fricative</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=glyph><a href="#ipa170" title="IPA:170, USV:0077">w</a></p>
  </td>
  <td width=52 style='width:39.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>w</p>
  </td>
  <td width=105 style='width:79.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=row>Vd labial-velar approximant</p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=glyph><a href="#ipa183" title="IPA:183, USV:0291">&#657;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>z&gt;</p>
  </td>
  <td width=108 style='width:81.35pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=row>Vd alveolo-palatal fricative</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=glyph><a href="#ipa171" title="IPA:171, USV:0265">&#613;</a></p>
  </td>
  <td width=52 style='width:39.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p><span class=key>y&lt;</span> <span class=row>or</span> <span class=key>h=</span></p>
  </td>
  <td width=105 style='width:79.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>Vd labial-palatal approximant</p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=glyph><a href="#ipa181" title="IPA:181, USV:027A">&#634;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>L&gt;</p>
  </td>
  <td width=108 style='width:81.35pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>Vd alveolar lateral flap</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=glyph><a href="#ipa173" title="IPA:173, USV:029C">&#668;</a></p>
  </td>
  <td width=52 style='width:39.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>H=</p>
  </td>
  <td width=105 style='width:79.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=row>Vl epiglottal fricative</p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=glyph><a href="#ipa175" title="IPA:175, USV:0267">&#615;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>H&gt;</p>
  </td>
  <td width=108 style='width:81.35pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=row>Simultaneous &#643; and x</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=glyph><a href="#ipa174" title="IPA:174, USV:02A2">&#674;</a></p>
  </td>
  <td width=52 style='width:39.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>Q&lt;</p>
  </td>
  <td width=105 style='width:79.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=row>Vd epiglottal fricative</p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=108 style='width:81.35pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=row>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=39 valign=top style='width:29.35pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;border-right:
  none;padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=glyph><a href="#ipa172" title="IPA:172, USV:02A1">&#673;</a></p>
  </td>
  <td width=52 style='width:39.05pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>Q=</p>
  </td>
  <td width=105 style='width:79.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>Vd epiglottal plosive</p>
  </td>
  <td width=33 valign=top style='width:24.8pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=108 style='width:81.35pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>&nbsp;</p>
  </td>
 </tr>
</table>

<h3>Vowels</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "=I" would produce "ɨ".</p>

<table border=0 cellspacing=0 cellpadding=0 width=0
 style='width:318.6pt;margin-left:3.0pt;border-collapse:collapse'>
 <tr style='page-break-inside:avoid'>
  <td width=51 valign=top style='width:38.15pt;border:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>&nbsp;</p>
  </td>
  <td width=122 colspan=4 valign=top style='width:91.45pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=column>Front</p>
  </td>
  <td width=132 colspan=4 valign=top style='width:99.0pt;border:solid windowtext 1.5pt;
  border-right:none;padding:0in .05in 0in .05in'>
  <p class=column>Central</p>
  </td>
  <td width=120 colspan=4 valign=top style='width:1.25in;border:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=column>Back</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 valign=top style='width:38.15pt;border:solid windowtext 1.5pt;
  border-top:none;padding:0in .05in 0in .05in'>
  <p class=row>&nbsp;</p>
  </td>
  <td width=62 colspan=2 valign=top style='width:46.45pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=column>Unrounded</p>
  </td>
  <td width=60 colspan=2 valign=top style='width:45.0pt;border:none;border-bottom:
  solid windowtext 1.5pt;padding:0in .05in 0in .05in'>
  <p class=column>Rounded</p>
  </td>
  <td width=60 colspan=2 valign=top style='width:45.0pt;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:none;padding:0in .05in 0in .05in'>
  <p class=column>Unrounded</p>
  </td>
  <td width=72 colspan=2 valign=top style='width:.75in;border-top:none;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;
  border-right:none;padding:0in .05in 0in .05in'>
  <p class=column>Rounded</p>
  </td>
  <td width=60 colspan=2 valign=top style='width:45.0pt;border:solid windowtext 1.5pt;
  border-top:none;padding:0in .05in 0in .05in'>
  <p class=column>Unrounded</p>
  </td>
  <td width=60 colspan=2 valign=top style='width:45.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=column>Rounded</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>Close</p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa301" title="IPA:301, USV:0069">i</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>i</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa309" title="IPA:309, USV:0079">y</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;padding:0in .05in 0in .05in'>
  <p class=key>y</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa317" title="IPA:317, USV:0268">&#616;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=key>I=</p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa318" title="IPA:318, USV:0289">&#649;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>U=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa316" title="IPA:316, USV:026F">&#623;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>u=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa308" title="IPA:308, USV:0075">u</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>u</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border-top:solid windowtext 1.0pt; border-left:solid windowtext 1.5pt;border-bottom:none;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=row>Near-close</p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border-top:solid windowtext 1.0pt; border-left:solid windowtext 1.5pt;border-bottom:none;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa319" title="IPA:319, USV:026A">&#618;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>i=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa320" title="IPA:320, USV:028F">&#655;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-top:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>y=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt; border-left:solid windowtext 1.5pt;border-bottom:none;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-top:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa321" title="IPA:321, USV:028A">&#650;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:none;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>u&lt;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border-top:solid windowtext 1.0pt; border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt; border-right:none;padding:0in .05in 0in .05in'>
  <p class=row>Close-mid</p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border-top:solid windowtext 1.0pt; border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt; border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa302" title="IPA:302, USV:0065">e</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in .05in 0in .05in'>
  <p class=key>e</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa310" title="IPA:310, USV:00F8">ø</a></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=key>o&gt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa397" title="IPA:397, USV:0258">&#600;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=key>E=</p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa323" title="IPA:323, USV:0275">&#629;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>O=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt; border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt; border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa315" title="IPA:315, USV:0264">&#612;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in .05in 0in .05in'>
  <p class=key>O&gt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa307" title="IPA:307, USV:006F">o</a></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>o</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=row>Mid</p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa322" title="IPA:322, USV:0259">&#601;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in .05in 0in .05in'>
  <p class=key>e=</p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>Open-mid</p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa303" title="IPA:303, USV:025B">&#603;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>e&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa311" title="IPA:311, USV:0153">œ</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;padding:0in .05in 0in .05in'>
  <p class=key>E&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa326" title="IPA:326, USV:025C">&#604;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>e&gt;</p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa395" title="IPA:395, USV:025E">&#606;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;padding:0in .05in 0in .05in'>
  <p class=key>O&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-left:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa314" title="IPA:314, USV:028C">&#652;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>u&gt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa306" title="IPA:306, USV:0254">&#596;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>o&lt;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border-top:solid windowtext 1.0pt; border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt; border-right:none;padding:0in .05in 0in .05in'>
  <p class=row>Near-open</p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border-top:solid windowtext 1.0pt; border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt; border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa325" title="IPA:325, USV:00E6">æ</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in .05in 0in .05in'>
  <p class=key>a&lt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:solid windowtext 1.5pt;
  border-left:none;padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa324" title="IPA:324, USV:0250">&#592;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>a&gt;</p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.5pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.0pt; border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=51 style='width:38.15pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=row>Open</p>
  </td>
  <td width=26 valign=top style='width:19.45pt;border-top:none;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.5pt;border-right:
  none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa304" title="IPA:304, USV:0061">a</a></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=key>a</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa312" title="IPA:312, USV:0276">&#630;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>E&gt;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=36 valign=top style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=24 valign=top style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa305" title="IPA:305, USV:0251">&#593;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.0pt;padding:0in .05in 0in .05in'>
  <p class=key>a=</p>
  </td>
  <td width=24 valign=top style='width:.25in;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa313" title="IPA:313, USV:0252">&#594;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;padding:0in .05in 0in .05in'>
  <p class=key>o=</p>
  </td>
 </tr>
</table>

<h3>Suprasegmentals</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "<." would produce "|".</p>

<table border=1 cellspacing=0 cellpadding=0 width=0
 style='width:149.4pt;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:solid windowtext 1.5pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt; border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa501" title="IPA:501, USV:02C8">&#712;</a></p>
  </td>
  <td width=48 valign=top style='width:.5in;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>}</p>
  </td>
  <td width=120 style='width:1.25in;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Primary stress</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa502" title="IPA:502, USV:02CC">&#716;</a></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>}}</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Secondary stress</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>e<a href="#ipa503" title="IPA:503, USV:02D0">&#720;</a></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>:</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Long</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>e<a href="#ipa504" title="IPA:504, USV:02D1">&#721;</a></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>::</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Half long</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>e&#720;&#720;</p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>:::</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Extra long</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa505" title="IPA:505, USV:0306">e&#774;</a></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>***</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Extra short</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa507" title="IPA:507, USV:007C">|</a></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>.&lt;</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Minor (foot) group</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa508" title="IPA:508, USV:2016">&#8214;</a></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>.=</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Major (intonation) group</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa506" title="IPA:506, USV:002E">.</a></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>.</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Syllable break</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=31 style='width:23.4pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa509" title="IPA:509, USV:203F">&#8255;</a></p>
  </td>
  <td width=48 valign=top style='width:.5in;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#=</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Linking (absence of a break)</p>
  </td>
 </tr>
</table>

<h3>Other (non-IPA) Vowels</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "&gt;A" would produce "ᴂ".</p>

<table border=1 cellspacing=0 cellpadding=0 width=0
 style='width:279.0pt;margin-left:3.0pt;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.5pt;border-left:
  solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
  none;padding:0in .05in 0in .05in'>
  <p class=glyph>&#7426;</p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=key>A&gt;</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border-top:solid windowtext 1.5pt;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph>&#945;</p>
  </td>
  <td width=36 style='width:29.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in .05in 0in .05in'>
  <p class=key>a|</p>
  </td>
  <td width=120 style='width:1.25in;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>open central unrounded vowel</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa399" title="IPA:399, USV:0269">&#617;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>i|</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>near-close near-front unrounded</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph>&#7424;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>A|</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>open central unrounded</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph>&#7548;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>I&gt;</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>&nbsp;</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph>&#639;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>z|</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>unrounded alveolar apical</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph>&#7547;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>I&lt;</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>lower-high central unrounded</p>
  <p class=row>or</p>
  <p class=row>high back unrounded</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph>&#645;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>Z|</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>unrounded retroflex apical</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph>&#7550;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>U&gt;</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>high front rounded</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph>&#686;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>y|</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>rounded alveolar apical</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa398" title="IPA:398, USV:0277">&#631;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>u|</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>near-close back rounded</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph>&#687;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>Y|</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>rounded retroflex apical</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph>&#7431;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>E|</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>mid front unrounded</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=24 style='width:.25in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in .05in 0in .05in'>
  <p class=glyph><a href="#ipa396" title="IPA:396, USV:029A">&#666;</a></p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>e|</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>open-mid front rounded</p>
  </td>
  <td width=24 style='width:.25in;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=glyph>&nbsp;</p>
  </td>
  <td width=36 style='width:29.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=120 style='width:1.25in;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in .05in 0in .05in'>
  <p class=row>&nbsp;</p>
  </td>
 </tr>
</table>

<h3>Tone and Word accents</h3>

<p>In this section the keystrokes are the same whether you turned on <b>Before</b> or not.</p>

<table border=1 cellspacing=0 cellpadding=0 width=0
 style='width:324.75pt;margin-left:3.0pt;border-collapse:collapse;border:
 none'>
 <tr style='page-break-inside:avoid'>
  <td width=203 colspan=5 style='width:152.2pt;border:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=column>Level<a href="#_ftn1" name="_ftnref1" title=""><span class=MsoFootnoteReference>[1]</span></a></p>
  </td>
  <td width=230 colspan=5 style='width:172.55pt;border:solid windowtext 1.5pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=column>Contour<a href="#_ftn2" name="_ftnref2" title="">[2]</a></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa519" title="IPA:519, USV:02E5">&#741;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#4</p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa512" title="IPA:512, USV:030B">e&#779;</a></p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@4</p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Extra high</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa529" title="IPA:529, USV:02E9 02E5">&#745;&#741;</a></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#04</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa524" title="IPA:524, USV:030C">e&#780;</a></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@13</p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Rising</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa520" title="IPA:520, USV:02E6">&#742;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#3</p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa513" title="IPA:513, USV:0301">e&#769;</a></p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@3</p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>High</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa530" title="IPA:530, USV:02E5 02E9">&#741;&#745;</a></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#40</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa525" title="IPA:525, USV:0302">e&#770;</a></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@31</p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Falling</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa521" title="IPA:521, USV:02E7">&#743;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#2</p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa514" title="IPA:514, USV:0304">e&#772;</a></p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@2</p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Mid</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa531" title="IPA:531, USV:02E7 02E5">&#743;&#741;</a></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#24</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=11.0pt; page-break-after><a href="#ipa526" title="IPA:526, USV:1DC4">e&#7620;</a></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@23</p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>High rising</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa522" title="IPA:522, USV:02E8">&#744;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#1</p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa515" title="IPA:515, USV:0300">e&#768;</a></p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@1</p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Low</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa532" title="IPA:532, USV:02E9 02E7">&#744;&#743;</a></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#12</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa527" title="IPA:527, USV:1DC5">e&#7621;</a></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@12</p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Low rising</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa523" title="IPA:523, USV:02E9">&#745;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#0</p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa516" title="IPA:516, USV:030F">e&#783;</a></p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@0</p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Extra low</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa533" title="IPA:533, USV:02E8 02E5 02E8">&#744;&#741;&#744;</a></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#141</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa528" title="IPA:528, USV:1DC8">e&#7624;</a></p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@131</p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Rising-falling</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:   3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa517"
  title="IPA:517, USV:A71C">&#xA71C;</a></p>
  </td>
  <td width=38 valign=top style='width:28.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#&lt;</p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Downstep</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:   3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>e&#7622;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@21</p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Low falling</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:   3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa518" title="IPA:518, USV:A71B">&#xA71B;</a></p>
  </td>
  <td width=38 valign=top style='width:28.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#&gt;</p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Upstep</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:   3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>e&#7623;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@32</p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>High falling</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:   3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>&#42781;</p>
  </td>
  <td width=38 style='width:28.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>!^</p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Africanist downstep</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:   3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>e&#7625;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@313</p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Falling-rising</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:   3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>&#42782;</p>
  </td>
  <td width=38 valign=top style='width:28.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#!</p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Africanist upstep (raised)</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:   3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa510" title="IPA:510, USV:2197">&#8599;</a></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#&gt;&gt;</p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Global rise</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:   3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=36 style='width:27.05pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=32 valign=top style='width:24.05pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>&#42783;</p>
  </td>
  <td width=38 valign=top style='width:28.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>##!</p>
  </td>
  <td width=53 style='width:39.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Africanist upstep (lowered)</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=tableipanormal style='margin-top:3.0pt;margin-right:0in;margin-bottom:   3.0pt;margin-left:0in;line-height:12.0pt'>&nbsp;</p>
  </td>
  <td width=50 style='width:37.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>&nbsp;</p>
  </td>
  <td width=33 valign=top style='width:25.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa511" title="IPA:511, USV:2198">&#8600;</a></p>
  </td>
  <td width=50 valign=top style='width:37.85pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#&lt;&lt;</p>
  </td>
  <td width=62 style='width:46.85pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Global fall</p>
  </td>
 </tr>
</table>

<h3>Superscripts</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "&Hat;3" would produce "³", "&Hat;h" would produce "ʰ", and "&Hat;=g" would produce "ˠ".</p>

<table border=1 cellspacing=0 cellpadding=0 width=0
 style='width:334.1pt;margin-left:3.0pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=121 style='width:91.1pt;border-top:solid;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>³</p>
  </td>
  <td width=192 style='width:91.1pt;border-top:solid;border-left:none windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>3^ (0-9)</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>superscript number</p>
  </td>
 </tr>
 <tr>
  <td width=121 style='width:91.1pt;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>&#8315;</p>
  </td>
  <td width=192 style='width:2.0in;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>-^</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>superscript hyphen</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:solid windowtext 1.5pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt; border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>k<a href="#ipa404" title="IPA:404, USV:02B0">&#688;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>h^</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Aspirated</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>t<a href="#ipa420" title="IPA:420, USV:02B7">&#695;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>w^</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Labialised</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>t<a href="#ipa421" title="IPA:421, USV:02B2">&#690;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>j^</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Palatalised</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>l<a href="#ipa422" title="IPA:422, USV:02E0">&#736;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>g=^</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Velarised</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>t<a href="#ipa423" title="IPA:423, USV:02E4">&#740;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>?&lt;^</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Pharyngealised</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa425" title="IPA:425, USV:207F">&#8319;</a>k</p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>n^
  </p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Pre/post nasalised</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>t<a href="#ipa426" title="IPA:426, USV:02E1">&#737;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>l^</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Lateral release</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>&#7598;&#607;</p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>symbol followed by <span class=key>^</span> e.g. <span class=key>n=^</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Other superscripts are available<a href="#_ftn3" name="_ftnref3"
  title="">[3]</a></p>
  </td>
 </tr>
</table>

<h3>Subscripts</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "_3" would produce "₃"</p>
<p>Use the "_" rota after the numeral to continue with <a href="#diacritics">Diacritics &amp; Suprasegmentals</a></p>

<table border=1 cellspacing=0 cellpadding=0 width=0
 style='width:334.1pt;margin-left:3.0pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=121 style='width:91.1pt;border-top:solid;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>₃</p>
  </td>
  <td width=192 style='width:91.1pt;border-top:solid;border-left:none windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>3_ (0-9)</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>subscript number</p>
  </td>
 </tr> 
</table>

<h3>Other (non-IPA) Symbols</h3>

<p>In this section, if you turned on <b>Before</b> in <b>Keyboard options</b>, you will type the opposite sequence to what is in the below table. For example, this sequence "&gt;c" would produce "ƈ".</p>

<table border=1 cellspacing=0 cellpadding=0 width=0
 style='width:149.4pt;border-collapse:collapse;border:none'>
 <tr style='page-break-inside:avoid;height:16.25pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:solid windowtext 2.25pt;
  border-left:solid windowtext 2.25pt;border-bottom:solid windowtext 1.0pt; border-right:none;padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=glyph><a href="#ipa163" title="IPA:163, USV:0188">&#392;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border-top:solid windowtext 2.25pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=key>c&gt;</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:solid windowtext 2.25pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:16.25pt'>
  <p class=row>vl palatal implosive</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph>&#545;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>d|</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>alveolo-palatal vd plosive</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph>&#1106;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>h|</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>vd pharyngeal nasal</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph><a href="#ipa165" title="IPA:165, USV:0199">&#409;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>k&gt;</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>vl velar implosive</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph>&#564;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>l|</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>front-palatal vd lateral approximant</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph>&#565;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>n|</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>front-palatal vd nasal</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph><a href="#ipa159" title="IPA:159, USV:01A5">&#421;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>p&gt;</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>vl bilabial implosive</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph><a href="#ipa167" title="IPA:167, USV:02A0">&#672;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>q&gt;</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>vl uvular implosive</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph>&#7576;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>S=</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>vl retroflex postalveolar fricative</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph><a href="#ipa161" title="IPA:161, USV:01AD">&#429;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>t&gt;</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>vl dental or alveolar implosive</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph>&#566;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>t|</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>front-palatal vl plosive</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph><a href="#ipa201" title="IPA:201, USV:0287">&#647;</a></p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>T|</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>dental click</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph>&#11379;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>w&lt;</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>bilabial flap</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph>&#7578;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>Z=</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>vd retroflex postalveolar fricative</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph>+</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>+=</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph>&#8709;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>0=</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>Empty set</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid;height:15.5pt'>
  <td width=40 valign=top style='width:29.8pt;border-top:none;border-left:solid windowtext 2.25pt;
  border-bottom:solid windowtext 2.25pt;border-right:none;padding:0in 5.4pt 0in 5.4pt;
  height:15.5pt'>
  <p class=glyph>&#9676;</p>
  </td>
  <td width=36 style='width:27.05pt;border:none;border-bottom:solid windowtext 2.25pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=key>0&gt;</p>
  </td>
  <td width=123 style='width:92.55pt;border-top:none;border-left:none; border-bottom:solid windowtext 2.25pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt;height:15.5pt'>
  <p class=row>Diacritic “holder”</p>
  </td>
 </tr>
</table>


<h3 id="diacritics">Diacritics &amp; Suprasegmentals</h3>

<p>In this section the keystrokes are the same whether you turned on <b>Before</b> or not.</p>

<table border=1 cellspacing=0 cellpadding=0 width=0
 style='width:334.1pt;margin-left:3.0pt;border-collapse:collapse;border:none'>
 <tr>
  <td width=121 style='width:91.1pt;border-top:solid;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>k&#701;</p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-top:solid;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>[[</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Light aspiration</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa419" title="IPA:419, USV:02DE">e&#734;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>[[[</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Rhoticity</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>t<a href="#ipa401" title="IPA:401, USV:02BC">&#700;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>]]</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Ejective</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa427" title="IPA:427, USV:031A">t&#794;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>]]]</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>No audible release</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>b<a href="#ipa492" title="IPA:492, USV:02BB">&#699;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>]]]]</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Weak aspiration</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa431" title="IPA:431, USV:0329">l&#809;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>$</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Syllabic</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa432" title="IPA:432, USV:032F">a&#815;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>$$</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Non-syllabic</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa406" title="IPA:406, USV:0330">a&#816;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>$$$</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Creaky voiced</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>&#7567;</p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>symbol followed by <span class=key> $$$$ </span> e.g. <span class=key>a$$$$</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Retroflex hooks<a href="#_ftn4" name="_ftnref5" title="">[4]</a></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa402" title="IPA:402, USV:0325">n&#805;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>%</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Voiceless</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa403" title="IPA:403, USV:032C">s&#812;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>%%</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Voiced</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa405" title="IPA:405, USV:0324">s&#804;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>%%%</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Breathy voiced</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>&#7552;</p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>symbol followed by <span class=key>%%%%</span> e.g. <span class=key>b%%%%</span></p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Palatal hooks<a href="#_ftn5" name="_ftnref6" title="">[5]</a></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa402b" title="IPA:402, USV:030A">&#331;&#778;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Voiceless (diacritics are sometimes placed above a symbol with a descender)</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa402b" title="IPA:402, USV:030A">&#331;</a>&#781;</p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@@</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Syllabic (diacritics are sometimes placed above a symbol with a descender)</p>
  </td>
 </tr>
  <td width=43 valign=top style='width:.45in;border-top:solid windowtext 1.5pt;
  border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt; border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa408" title="IPA:408, USV:032A">t&#810;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>{</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:solid windowtext 1.5pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Dental</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa409" title="IPA:409, USV:033A">t&#826;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>{{</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Apical</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa410" title="IPA:410, USV:033B">t&#827;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>{{{</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Laminal</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa407" title="IPA:407, USV:033C">t&#828;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>{{{{</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Linguolabial</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa497" title="IPA:497, USV:0323">t&#803;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>{{{{{</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Closer variety / Fricative</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa424" title="IPA:424, USV:0303">e&#771;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>~</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Nasalised</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa209" title="IPA:209, USV:026B">&#619;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>l~~</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Velarized
  or pharyngealized<a href="#_ftn6" name="_ftnref6" title="">[6]</a></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa415" title="IPA:415, USV:0308">e&#776;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>*</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Centralised</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa416" title="IPA:416, USV:033D">e&#829;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>**</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Mid centralised</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa505" title="IPA:505, USV:0306">e&#774;</a></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>***</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Extra short</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa493"
  title="IPA:493, USV:0307">e&#775;</a></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>****</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Palatalization/Centralization</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>m&#784;</p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>*****</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>&nbsp;</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa433" title="IPA:433, USV:0361">k&#865;p</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>#&amp;</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Double articulation / affricate<a href="#_ftn7" name="_ftnref7" title="">[7]</a></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa509b" title="IPA:(509), USV:035C">t&#860;s</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>@&amp;</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Double articulation / affricate<a href="#_ftn8" name="_ftnref8" title="">[8]</a></p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa413" title="IPA:413, USV:031F">u&#799;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>+</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Advanced</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa414" title="IPA:414, USV:0320">i&#800;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>_</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Retracted</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa429" title="IPA:429, USV:031D">e&#797;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>+ +</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Raised</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa430" title="IPA:430, USV:031E">e&#798;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>_ _</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Lowered</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa417" title="IPA:417, USV:0318">e&#792;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>+ + +</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>+ATR</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa418" title="IPA:418, USV:0319">e&#793;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>_ _ _</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>-ATR</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa411" title="IPA:411, USV:0339">e&#825;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>+ + + +</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>More rounded</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph><a href="#ipa412" title="IPA:412, USV:031C">e&#796;</a></p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>_ _ _ _</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Less rounded</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>o&#807;</p>
  </td>
  <td width=84 style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>_ _ _ _ _</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>open vowel</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>p&#840;</p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>}}}</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Fortis</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>p&#7618;</p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>}}}}</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Lenis</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>&#8594;</p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>=&gt;</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Becomes, is realized as</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.0pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=glyph>&#963;</p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>s&gt;</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Syllable</p>
  </td>
 </tr>
 <tr style='page-break-inside:avoid'>
  <td width=43 valign=top style='width:.45in;border-top:none;border-left:solid windowtext 1.5pt; border-bottom:solid windowtext 1.5pt;border-right:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>&#847;</p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border:none;border-bottom:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=key>=&lt;</p>
  </td>
  <td width=132 style='width:99.0pt;border-top:none;border-left:none; border-bottom:solid windowtext 1.5pt;border-right:solid windowtext 1.5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=row>Combining Grapheme Joiner</p>
  </td>
 </tr>
</table>
<h2>Mobile Layout</h2>

<h3>Default layer</h3>

<table border=1 cellspacing=0 cellpadding=0 width=0 style='width:300pt;border-collapse:collapse;border:none'>
 <thead>
  <th>
    <td class=column colspan="10">Longpress keys</td>
 </th>
  </thead>
<tr>
  <td class=glyph>a</td>
  <td class=glyph>æ</td>
  <td class=glyph>ɐ</td>
  <td class=glyph>ɑ</td>
  <td class=glyph>ᴂ</td>
  <td class=glyph>ɒ</td>
  <td class=glyph>α</td>
  <td class=glyph>ᶏ</td>
  <td class=glyph>ᶐ</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>b</td>
  <td class=glyph>ɓ</td>
  <td class=glyph>β</td>
  <td class=glyph>ᵬ</td>
  <td class=glyph>ᶀ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>c</td>
  <td class=glyph>ç</td>
  <td class=glyph>ɕ</td>
  <td class=glyph>ƈ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>d</td>
  <td class=glyph>ð</td>
  <td class=glyph>ɗ</td>
  <td class=glyph>ɖ</td>
  <td class=glyph>ȡ</td>
  <td class=glyph>ᵭ</td>
  <td class=glyph>ᶁ</td>
  <td class=glyph>ᶑ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>e</td>
  <td class=glyph>ɘ</td>
  <td class=glyph>ə</td>
  <td class=glyph>ɛ</td>
  <td class=glyph>ɜ</td>
  <td class=glyph>œ</td>
  <td class=glyph>ʚ</td>
  <td class=glyph>ᶒ</td>
  <td class=glyph>ᶓ</td>
  <td class=glyph>ᶔ</td>
  <td class=glyph>ᶕ</td>
</tr>	
<tr>
  <td class=glyph>f</td>
  <td class=glyph>ɸ</td>
  <td class=glyph>ᵮ</td>
  <td class=glyph>ᶂ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>g</td>
  <td class=glyph>ɡ</td>
  <td class=glyph>ɠ</td>
  <td class=glyph>ɣ</td>
  <td class=glyph>ᶃ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>h</td>
  <td class=glyph>ħ</td>
  <td class=glyph>ɥ</td>
  <td class=glyph>ɦ</td>
  <td class=glyph>ɧ</td>
  <td class=glyph>ђ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>i</td>
  <td class=glyph>ɨ</td>
  <td class=glyph>ɩ</td>
  <td class=glyph>ᵼ</td>
  <td class=glyph>ᶖ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>j</td>
  <td class=glyph>ɟ</td>
  <td class=glyph>ʄ</td>
  <td class=glyph>ʝ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>k</td>
  <td class=glyph>ƙ</td>
  <td class=glyph>ᶄ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>l</td>
  <td class=glyph>ɫ</td>
  <td class=glyph>ɬ</td>
  <td class=glyph>ɭ</td>
  <td class=glyph>ɮ</td>
  <td class=glyph>ɺ</td>
  <td class=glyph>ʎ</td>
  <td class=glyph>ȴ</td>
  <td class=glyph>ᶅ</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>m</td>
  <td class=glyph>ɱ</td>
  <td class=glyph>ᵯ</td>
  <td class=glyph>ᶆ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>n</td>
  <td class=glyph>ŋ</td>
  <td class=glyph>ɲ</td>
  <td class=glyph>ɳ</td>
  <td class=glyph>ȵ</td>
  <td class=glyph>ᵰ</td>
  <td class=glyph>ᶇ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>o</td>
  <td class=glyph>ø</td>
  <td class=glyph>ɔ</td>
  <td class=glyph>ɵ</td>
  <td class=glyph>ɤ</td>
  <td class=glyph>ɞ</td>
  <td class=glyph>ᶗ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>p</td>
  <td class=glyph>ƥ</td>
  <td class=glyph>ᵱ</td>
  <td class=glyph>ᶈ</td>
  <td class=glyph>ʘ</td>
  <td class=glyph>ǀ</td>
  <td class=glyph>ǁ</td>
  <td class=glyph>ǂ</td>
  <td class=glyph>ǃ</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>q</td>
  <td class=glyph>ʔ</td>
  <td class=glyph>ʕ</td>
  <td class=glyph>ʡ</td>
  <td class=glyph>ʢ</td>
  <td class=glyph>ʠ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>r</td>
  <td class=glyph>ɹ</td>
  <td class=glyph>ɻ</td>
  <td class=glyph>ɽ</td>
  <td class=glyph>ɾ</td>
  <td class=glyph>ɿ</td>
  <td class=glyph>ᵲ</td>
  <td class=glyph>ᵳ</td>
  <td class=glyph>ᶉ</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>s</td>
  <td class=glyph>ʂ</td>
  <td class=glyph>ʃ</td>
  <td class=glyph>σ</td>
  <td class=glyph>ʅ</td>
  <td class=glyph>ᵴ</td>
  <td class=glyph>ᶊ</td>
  <td class=glyph>ᶋ</td>
  <td class=glyph>ᶘ</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>t</td>
  <td class=glyph>ȶ</td>
  <td class=glyph>ƭ</td>
  <td class=glyph>θ</td>
  <td class=glyph>ʇ</td>
  <td class=glyph>ʈ</td>
  <td class=glyph>ᵵ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>u</td>
  <td class=glyph>ɯ</td>
  <td class=glyph>ʉ</td>
  <td class=glyph>ʊ</td>
  <td class=glyph>ʌ</td>
  <td class=glyph>ɷ</td>
  <td class=glyph>ᶙ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>v</td>
  <td class=glyph>ʋ</td>
  <td class=glyph>ⱱ</td>
  <td class=glyph>ᶌ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>w</td>
  <td class=glyph>ⱳ</td>
  <td class=glyph>ɰ</td>
  <td class=glyph>ʍ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>x</td>
  <td class=glyph>χ</td>
  <td class=glyph>ᶍ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>y</td>
  <td class=glyph>ʮ</td>
  <td class=glyph>ʯ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>z</td>
  <td class=glyph>ʐ</td>
  <td class=glyph>ʑ</td>
  <td class=glyph>ʒ</td>
  <td class=glyph>ᵶ</td>
  <td class=glyph>ᶎ</td>
  <td class=glyph>ᶚ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
</table>

<h3>Shift layer</h3>

<p>Longpress keys on the shift layer are the small capital forms.</p>

<table border=1 cellspacing=0 cellpadding=0 width=0 style='width:300pt;border-collapse:collapse;border:none'>
 <thead>
  <th>
    <td class=column colspan="2">Longpress keys</td>
  </th>
</thead>
<tr>
  <td class=glyph>A</td>
  <td class=glyph>ᴀ</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>B</td>
  <td class=glyph>ʙ</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>B</td>
  <td class=glyph>ʙ</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>E</td>
  <td class=glyph>ᴇ</td>
  <td class=glyph>ɶ</td>
</tr>	
<tr>
  <td class=glyph>G</td>
  <td class=glyph>ɢ</td>
  <td class=glyph>ʛ</td>
</tr>	
<tr>
  <td class=glyph>H</td>
  <td class=glyph>ʜ</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>I</td>
  <td class=glyph>ɪ</td>
  <td class=glyph>ᵻ</td>
</tr>	
<tr>
  <td class=glyph>L</td>
  <td class=glyph>ʟ</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>N</td>
  <td class=glyph>ɴ</td>
  <td class=glyph>ɴ</td>
</tr>	
<tr>
  <td class=glyph>R</td>
  <td class=glyph>ʀ</td>
  <td class=glyph>ʁ</td>
</tr>	
<tr>
  <td class=glyph>U</td>
  <td class=glyph>ᵾ</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>Y</td>
  <td class=glyph>ʏ</td>
  <td class=glyph></td>
</tr>	
</tr>	
</table>

<h3>Superscript/Subscript (SupSub) layer</h3>

<table border=1 cellspacing=0 cellpadding=0 width=0 style='width:300pt;border-collapse:collapse;border:none'>
 <thead>
  <th>
    <td class=column colspan="7">Longpress keys</td>
  </th>
</thead>
<tr>
  <td class=glyph>ᵃ</td>
  <td class=glyph>ᵄ</td>
  <td class=glyph>ᵅ</td>
  <td class=glyph>ᵆ</td>
  <td class=glyph>ᶛ</td>
  <td class=glyph>𐞃</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ᵇ</td>
  <td class=glyph>ᵝ</td>
  <td class=glyph>𐞅</td>
  <td class=glyph>𐞄</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ᶜ</td>
  <td class=glyph>ᶝ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ᵈ</td>
  <td class=glyph>ᶞ</td>
  <td class=glyph>𐞋</td>
  <td class=glyph>𐞌</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ᵉ</td>
  <td class=glyph>ᵊ</td>
  <td class=glyph>ᵋ</td>
  <td class=glyph>ᶟ</td>
  <td class=glyph>ꟹ</td>
  <td class=glyph>𐞎</td>
  <td class=glyph>𐞣</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ᶠ</td>
  <td class=glyph>ᶲ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>
<tr>
  <td class=glyph>ᵍ</td>
  <td class=glyph>ˠ</td>
  <td class=glyph>ᶢ</td>
  <td class=glyph>𐞓</td>
  <td class=glyph>𐞒</td>
  <td class=glyph>𐞔</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>
<tr>
  <td class=glyph>ʰ</td>
  <td class=glyph>ʱ</td>
  <td class=glyph>ᶣ</td>
  <td class=glyph>𐞕</td>
  <td class=glyph>𐞗</td>
  <td class=glyph>𐞖</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>
<tr>
  <td class=glyph>ⁱ</td>
  <td class=glyph>ᶤ</td>
  <td class=glyph>ᶥ</td>
  <td class=glyph>ᶦ</td>
  <td class=glyph>ᶧ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>
<tr>
  <td class=glyph>ʲ</td>
  <td class=glyph>ᶡ</td>
  <td class=glyph>ᶨ</td>
  <td class=glyph>𐞘</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>
<tr>
  <td class=glyph>ᵏ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>
<tr>
  <td class=glyph>ˡ</td>
  <td class=glyph>ᶩ</td>
  <td class=glyph>ᶫ</td>
  <td class=glyph>𐞠</td>
  <td class=glyph>𐞛</td>
  <td class=glyph>𐞞</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>
<tr>
  <td class=glyph>ᵐ</td>
  <td class=glyph>ᶬ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>
<tr>
  <td class=glyph>ⁿ</td>
  <td class=glyph>ᵑ</td>
  <td class=glyph>ᶮ</td>
  <td class=glyph>ᶯ</td>
  <td class=glyph>ᶰ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>
<tr>
  <td class=glyph>ᵒ</td>
  <td class=glyph>ᵓ</td>
  <td class=glyph>ᶱ</td>
  <td class=glyph>𐞢</td>
  <td class=glyph>𐞑</td>
  <td class=glyph>𐞏</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ᵖ</td>
  <td class=glyph>𐞵</td>
  <td class=glyph>𐞶</td>
  <td class=glyph>𐞷</td>
  <td class=glyph>𐞸</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>𐞥</td>
  <td class=glyph>ˀ</td>
  <td class=glyph>ˤ</td>
  <td class=glyph>𐞳</td>
  <td class=glyph>𐞴</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ʳ</td>
  <td class=glyph>ʴ</td>
  <td class=glyph>ʵ</td>
  <td class=glyph>ʶ</td>
  <td class=glyph>𐞦</td>
  <td class=glyph>𐞨</td>
  <td class=glyph>𐞩</td>
  <td class=glyph>𐞪</td>
</tr>	
<tr>
  <td class=glyph>ˢ</td>
  <td class=glyph>ᶳ</td>
  <td class=glyph>ᶴ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ᵗ</td>
  <td class=glyph>ᶿ</td>
  <td class=glyph>𐞯</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ᵘ</td>
  <td class=glyph>ᶶ</td>
  <td class=glyph>ᵚ</td>
  <td class=glyph>ᶷ</td>
  <td class=glyph>ᶺ</td>
  <td class=glyph>𐞤</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ᵛ</td>
  <td class=glyph>ᶹ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ʷ</td>
  <td class=glyph>ᶭ</td>
  <td class=glyph>ꭩ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ˣ</td>
  <td class=glyph>ᵡ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ʸ</td>
  <td class=glyph>𐞲</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>ᶻ</td>
  <td class=glyph>ᶼ</td>
  <td class=glyph>ᶽ</td>
  <td class=glyph>ᶾ</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>⁻</td>
  <td class=glyph>⁼</td>
  <td class=glyph>⁽</td>
  <td class=glyph>⁾</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
</table>

<h3>Numeric (123) layer</h3>

<table border=1 cellspacing=0 cellpadding=0 width=0 style='width:300pt;border-collapse:collapse;border:none'>
 <thead>
  <th>
    <td class=column colspan="4">Longpress keys</td>
    </th>
</thead>
<tr>
  <td class=glyph>0</td>
  <td class=glyph>⁰</td>
  <td class=glyph>₀</td>
  <td class=glyph>∅</td>
  <td class=glyph>◌</td>
</tr>	
<tr>
  <td class=glyph>1</td>
  <td class=glyph>¹</td>
  <td class=glyph>₁</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>2</td>
  <td class=glyph>²</td>
  <td class=glyph>₂</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>3</td>
  <td class=glyph>³</td>
  <td class=glyph>₃</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>4</td>
  <td class=glyph>⁴</td>
  <td class=glyph>₄</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>5</td>
  <td class=glyph>⁵</td>
  <td class=glyph>₅</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>6</td>
  <td class=glyph>⁶</td>
  <td class=glyph>₆</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>7</td>
  <td class=glyph>⁷</td>
  <td class=glyph>₇</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>8</td>
  <td class=glyph>⁸</td>
  <td class=glyph>₈</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>9</td>
  <td class=glyph>⁹</td>
  <td class=glyph>₉</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>@</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>#</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>&</td>
  <td class=glyph>#</td>
  <td class=glyph>$</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>-</td>
  <td class=glyph>&#x207b;</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>=</td>
  <td class=glyph>&#x207c;</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>|</td>
  <td class=glyph>&#x2016;</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>&#x02d0;</td>
  <td class=glyph>&#x02d1;</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>&#x02BC;</td>
  <td class=glyph>&#x02BD;</td>
  <td class=glyph>&#x02BB;</td>
  <td class=glyph>&#x031A;</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>&#xA71D;</td>
  <td class=glyph>&#xA71E;</td>
  <td class=glyph>&#xA71F;</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>[</td>
  <td class=glyph>&#x00AB;</td>
  <td class=glyph>&lt;</td>
  <td class=glyph>{</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>(</td>
  <td class=glyph>&#x207D;</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>)</td>
  <td class=glyph>&#x207E;</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>]</td>
  <td class=glyph>&#x00BB;</td>
  <td class=glyph>&gt;</td>
  <td class=glyph>}</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>+</td>
  <td class=glyph>&#x207A;</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>&#x02C8;</td>
  <td class=glyph>&#x02CC;</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>*</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>&#x203F;</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
</table>

<h3>Diacritic (diac) layer</h3>

<table border=1 cellspacing=0 cellpadding=0 width=0 style='width:300pt;border-collapse:collapse;border:none'>
 <thead>
  <th>
    <td class=column colspan="5">Longpress keys</td>
  </th>
</thead>
<tr>
  <td class=glyph>̀ </td>
  <td class=glyph> ̏ </td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>
<tr>
  <td class=glyph>́ </td>
  <td class=glyph> ̋</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>̂</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̃</td>
  <td class=glyph> ̰</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̄</td>
  <td class=glyph> ̠</td>
  <td class=glyph> ̱</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̆</td>
  <td class=glyph> ̯</td>
  <td class=glyph> ̹</td>
  <td class=glyph> ̜</td>
  <td class=glyph> ̐</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̇</td>
  <td class=glyph> ̣</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̈</td>
  <td class=glyph> ̤</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̊</td>
  <td class=glyph> ̥</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̌</td>
  <td class=glyph> ̬</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̍</td>
  <td class=glyph> ̩</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̽</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̘</td>
  <td class=glyph> ̙</td>
  <td class=glyph> ̝</td>
  <td class=glyph> ̞</td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̻</td>
  <td class=glyph> ̪</td>
  <td class=glyph> ̺</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̟</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ̼</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ᷂</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph> ͈</td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>↗</td>
  <td class=glyph>↘</td>
  <td class=glyph>→</td>
  <td class=glyph>ꜛ</td>
  <td class=glyph>ꜜ</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>˧</td>
  <td class=glyph>˥</td>
  <td class=glyph>˦</td>
  <td class=glyph>˨</td>
  <td class=glyph>˩</td>
  <td class=glyph></td>
</tr>	
<tr>
  <td class=glyph>˩˥</td>
  <td class=glyph>˥˩</td>
  <td class=glyph>˧˥</td>
  <td class=glyph>˩˧</td>
  <td class=glyph>˨˥˨</td>
  <td class=glyph></td>
  <tr>
    <td class=glyph>꜔</td>
    <td class=glyph>꜒</td>
    <td class=glyph>꜓</td>
    <td class=glyph>꜕</td>
    <td class=glyph>꜖</td>
    <td class=glyph></td>
  </tr>	
  <tr>
    <td class=glyph> ᷄</td>
    <td class=glyph> ᷅</td>
    <td class=glyph> ᷆</td>
    <td class=glyph> ᷇</td>
    <td class=glyph> ᷈</td>
    <td class=glyph> ᷉</td>
  </tr>	
  <tr>
    <td class=glyph> ˞</td>
    <td class=glyph></td>
    <td class=glyph></td>
    <td class=glyph></td>
    <td class=glyph></td>
    <td class=glyph></td>
  </tr>	
  <tr>
    <td class=glyph> ͡</td>
    <td class=glyph> ͜</td>
    <td class=glyph></td>
    <td class=glyph></td>
    <td class=glyph></td>
    <td class=glyph></td>
  </tr>	
  <tr>
    <td class=glyph>CGJ</td>
    <td class=glyph></td>
    <td class=glyph></td>
    <td class=glyph></td>
    <td class=glyph></td>
    <td class=glyph></td>
  </tr>	
  </tr>	

</table>

<h2>Appendix: IPA number chart</h2>

<p class=glyphgreen>Green denotes IPA characters unsupported by this keyboard.</p>

<table border=1 cellspacing=0 cellpadding=0 width=0
 style='width:462.25pt;border-collapse:collapse;border:none'>
 <thead>
  <tr>
   <td>
   <p class=column>Alph sorting key</p>
   </td>
   <td>
   <p class=column>Glyph</p>
   </td>
   <td>
   <p class=column>Key-strokes</p>
   </td>
   <td>
   <p class=column>IPA No.</p>
   </td>
   <td>
   <p class=column>USV</p>
   </td>
   <td>
   <p class=column>Symbol Name</p>
   </td>
   <td>
   <p class=column>IPA Phonetic Description</p>
   </td>
  </tr>
 </thead>
 <tr>
  <td>
    <p>1.</p>
  </td>
  <td>
    <p class=glyph><a name=ipa304>a</a></p>
  </td>
<td>
  <p class=key>a</p>
  </td>
  <td>
    <p class=row>304</p>
  </td>
  <td>
    <p class=row>0061</p>
  </td>
  <td>
    <p class=row>Lowercase A</p>
  </td>
  <td>
    <p class=row>open front unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>2.</p>
  </td>
<td>
  <p class=glyph><a name=ipa324>&#592;</a></p>
  </td>
<td>
  <p class=key>a&gt;</p>
  </td>
<td>
  <p class=row>324</p>
  </td>
<td>
  <p class=row>0250</p>
  </td>
  <td>
    <p class=row>Turned A</p>
  </td>
  <td>
  <p class=row>near-open central vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>3.</p>
  </td>
<td>
  <p class=glyph><a name=ipa305>&#593;</a></p>
  </td>
<td>
  <p class=key>a=</p>
  </td>
<td>
  <p class=row>305</p>
  </td>
<td>
  <p class=row>0251</p>
  </td>
<td>
  <p class=row>Script
  A</p>
  </td>
  <td>
  <p class=row>open
  back unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>4.</p>
  </td>
<td>
  <p class=glyph><a name=ipa313>&#594;</a></p>
  </td>
<td>
  <p class=key>o=</p>
  </td>
<td>
  <p class=row>313</p>
  </td>
  <td>
  <p class=row>0252</p>
  </td>
<td>
  <p class=row>Turned Script A</p>
  </td>
  <td>
    <p class=row>open back rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
    <p>5.</p>
  </td>
<td>
  <p class=glyph><a name=ipa325>æ</a></p>
  </td>
<td>
  <p class=key>a&lt;</p>
  </td>
<td>
  <p class=row>325</p>
  </td>
<td>
  <p class=row>00E6</p>
  </td>
<td>
  <p class=row>Ash;
  Lowercase A-E ligature</p>
  </td>
  <td>
  <p class=row>near-open
  front unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>6.</p>
  </td>
  <td>
  <p class=glyph>A</p>
  </td>
<td>
  <p class=key>A</p>
  </td>
<td>
  <p class=row>701</p>
  </td>
  <td>
  <p class=row>0041</p>
  </td>
<td>
  <p class=row>Upper-case A</p>
  </td>
  <td>
  <p class=row>A</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>7.</p>
  </td>
<td>
  <p class=glyph><a name=ipa102>b</a></p>
  </td>
<td>
  <p class=key>b</p>
  </td>
<td>
  <p class=row>102</p>
  </td>
<td>
  <p class=row>0062</p>
  </td>
<td>
  <p class=row>Lowercase
  B</p>
  </td>
  <td>
  <p class=row>vd bilabial plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>8.</p>
  </td>
<td>
  <p class=glyph><a name=ipa160>&#595;</a></p>
  </td>
<td>
  <p class=key>b&gt;</p>
  </td>
<td>
  <p class=row>160</p>
  </td>
<td>
  <p class=row>0253</p>
  </td>
<td>
  <p class=row>Hooktop
  B</p>
  </td>
  <td>
  <p class=row>vd
  bilabial implosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>9.</p>
  </td>
<td>
  <p class=glyph><a name=ipa121>&#665;</a></p>
  </td>
<td>
  <p class=key>B=</p>
  </td>
<td>
  <p class=row>121</p>
  </td>
<td>
  <p class=row>0299</p>
  </td>
<td>
  <p class=row>Small Capital B</p>
  </td>
  <td>
  <p class=row>vd bilabial trill</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>10.</p>
  </td>
<td>
  <p class=glyph><a name=ipa127>&#946;</a></p>
  </td>
<td>
  <p class=key>b=</p>
  </td>
<td>
  <p class=row>127</p>
  </td>
<td>
  <p class=row>03B2</p>
  </td>
<td>
  <p class=row>Beta</p>
  </td>
  <td>
  <p class=row>vd bilabial fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>11.</p>
  </td>
<td>
  <p class=glyph>B</p>
  </td>
<td>
  <p class=key>B</p>
  </td>
<td>
  <p class=row>702</p>
  </td>
<td>
  <p class=row>0042</p>
  </td>
<td>
  <p class=row>Upper-case B</p>
  </td>
  <td>
  <p class=row>B</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>12.</p>
  </td>
<td>
  <p class=glyph><a name=ipa107>c</a></p>
  </td>
<td>
  <p class=key>c</p>
  </td>
<td>
  <p class=row>107</p>
  </td>
<td>
  <p class=row>0063</p>
  </td>
<td>
  <p class=row>Lowercase
  C</p>
  </td>
  <td>
  <p class=row>vl
  palatal plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>13.</p>
  </td>
<td>
  <p class=glyph><a name=ipa163>&#392;</a></p>
  </td>
<td>
  <p class=key>c&gt;</p>
  </td>
<td>
  <p class=row>163</p>
  </td>
<td>
  <p class=row>0188</p>
  </td>
<td>
  <p class=row>Hooktop C</p>
  </td>
  <td>
  <p class=row>vl palatal implosive <i>(withdrawn, 1993)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>14.</p>
  </td>
<td>
  <p class=glyphgreen>&#269;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>299</p>
  </td>
<td>
  <p class=row>010D</p>
  </td>
<td>
  <p class=row>C wedge</p>
  </td>
  <td>
  <p class=row>vl postalveolar affricate <i>(not IPA usage)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>15.</p>
  </td>
<td>
  <p class=glyph><a name=ipa138>ç</a></p>
  </td>
<td>
  <p class=key>c=</p>
  </td>
<td>
  <p class=row>138</p>
  </td>
<td>
  <p class=row>00E7</p>
  </td>
<td>
  <p class=row>C Cedilla</p>
  </td>
  <td>
  <p class=row>vl palatal fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>16.</p>
  </td>
<td>
  <p class=glyph><a name=ipa182>&#597;</a></p>
  </td>
<td>
  <p class=key>c&lt;</p>
  </td>
<td>
  <p class=row>182</p>
  </td>
<td>
  <p class=row>0255</p>
  </td>
<td>
  <p class=row>Curly-tail C</p>
  </td>
  <td>
  <p class=row>vl alveolo-palatal fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>17.</p>
  </td>
  <td>
  <p class=glyphgreen>&#663;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>202</p>
  </td>
  <td>
  <p class=row>0297</p>
  </td>
  <td>
  <p class=row>Stretched C</p>
  </td>
  <td>
  <p class=row>postalveolar click <i>(superceded by 178, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>18.</p>
  </td>
<td>
  <p class=glyph>C</p>
  </td>
<td>
  <p class=key>C</p>
  </td>
<td>
  <p class=row>624 (=703)</p>
  </td>
<td>
  <p class=row>0043</p>
  </td>
<td>
  <p class=row>Upper-case C</p>
  </td>
  <td>
  <p class=row>Creak</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>19.</p>
  </td>
<td>
  <p class=glyph>C</p>
  </td>
<td>
  <p class=key>C</p>
  </td>
<td>
  <p class=row>703 (use 624)</p>
  </td>
<td>
  <p class=row>0043</p>
  </td>
<td>
  <p class=row>Upper-case C</p>
  </td>
  <td>
  <p class=row>C (Creak)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>20.</p>
  </td>
<td>
  <p class=glyph><a name=ipa104>d</a></p>
  </td>
<td>
  <p class=key>d</p>
  </td>
<td>
  <p class=row>104</p>
  </td>
<td>
  <p class=row>0064</p>
  </td>
<td>
  <p class=row>Lowercase
  D</p>
  </td>
  <td>
  <p class=row>vd
  dental or alveolar plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>21.</p>
  </td>
<td>
  <p class=glyph><a name=ipa162>&#599;</a></p>
  </td>
<td>
  <p class=key>d&gt;</p>
  </td>
<td>
  <p class=row>162</p>
  </td>
<td>
  <p class=row>0257</p>
  </td>
<td>
  <p class=row>Hooktop
  D</p>
  </td>
  <td>
  <p class=row>vd
  dental or alveolar implosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>22.</p>
  </td>
<td>
  <p class=glyph><a name=ipa106>&#598;</a></p>
  </td>
<td>
  <p class=key>d&lt;</p>
  </td>
<td>
  <p class=row>106</p>
  </td>
<td>
  <p class=row>0256</p>
  </td>
<td>
  <p class=row>Right-tail
  D</p>
  </td>
  <td>
  <p class=row>vd
  retroflex plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>23.</p>
  </td>
<td>
  <p class=glyph><a name=ipa219>&#7569;</a></p>
  </td>
<td>
  <p class=key>d&gt;$$$$</p>
  </td>
<td>
  <p class=row>219</p>
  </td>
<td>
  <p class=row>1D91</p>
  </td>
<td>
  <p class=row>Hooktop
  right-tail D</p>
  </td>
  <td>
  <p class=row>vd
  retroflex implosive<i> (not explicitly IPA approved)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>24.</p>
  </td>
  <td>
  <p class=glyphgreen>&#675;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>212</p>
  </td>
  <td>
  <p class=row>02A3</p>
  </td>
  <td>
  <p class=row>D-Z ligature</p>
  </td>
  <td>
  <p class=row>vd alveolar affricate <i>(superceded by 104 + 133)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>25.</p>
  </td>
  <td>
  <p class=glyphgreen>&#676;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>214</p>
  </td>
  <td>
  <p class=row>02A4</p>
  </td>
  <td>
  <p class=row>D-Ezh ligature</p>
  </td>
  <td>
  <p class=row>vd postalveolar affricate <i>(superceded by 104 + 135)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>26.</p>
  </td>
  <td>
  <p class=glyphgreen>&#677;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>216</p>
  </td>
  <td>
  <p class=row>02A5</p>
  </td>
  <td>
  <p class=row>D-Curly-tail-Z ligature</p>
  </td>
  <td>
  <p class=row>vd alveolo-palatal affricate <i>(superceded by 104 + 183)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>27.</p>
  </td>
<td>
  <p class=glyph><a name=ipa131>ð</a></p>
  </td>
<td>
  <p class=key>d=</p>
  </td>
<td>
  <p class=row>131</p>
  </td>
<td>
  <p class=row>00F0</p>
  </td>
<td>
  <p class=row>Eth</p>
  </td>
  <td>
  <p class=row>vd dental fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>28.</p>
  </td>
<td>
  <p class=glyph>D</p>
  </td>
<td>
  <p class=key>D</p>
  </td>
<td>
  <p class=row>704</p>
  </td>
<td>
  <p class=row>0044</p>
  </td>
<td>
  <p class=row>Upper-case D</p>
  </td>
  <td>
  <p class=row>D</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>29.</p>
  </td>
<td>
  <p class=glyph><a name=ipa302>e</a></p>
  </td>
<td>
  <p class=key>e</p>
  </td>
<td>
  <p class=row>302</p>
  </td>
<td>
  <p class=row>0065</p>
  </td>
<td>
  <p class=row>Lowercase E</p>
  </td>
  <td>
  <p class=row>close-mid front unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>30.</p>
  </td>
<td>
  <p class=glyph><a name=ipa218>&#7498;</a></p>
  </td>
<td>
  <p class=key>e=^</p>
  </td>
<td>
  <p class=row>218</p>
  </td>
<td>
  <p class=row>1D4A</p>
  </td>
<td>
  <p class=row>Superscript schwa</p>
  </td>
  <td>
  <p class=row>mid central vowel release</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>31.</p>
  </td>
<td>
  <p class=glyph><a name=ipa322>&#601;</a></p>
  </td>
<td>
  <p class=key>e=</p>
  </td>
<td>
  <p class=row>322</p>
  </td>
<td>
  <p class=row>0259</p>
  </td>
<td>
  <p class=row>Schwa</p>
  </td>
  <td>
  <p class=row>mid central vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>32.</p>
  </td>
  <td>
  <p class=glyphgreen>&#602;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>327</p>
  </td>
  <td>
  <p class=row>025A</p>
  </td>
  <td>
  <p class=row>Right-hook schwa</p>
  </td>
  <td>
  <p class=row>R-coloured mid central vowel <i>(Equivalent to 322 + 419)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>33.</p>
  </td>
<td>
  <p class=glyph><a name=ipa397>&#600;</a></p>
  </td>
<td>
  <p class=key>E=</p>
  </td>
<td>
  <p class=row>397</p>
  </td>
<td>
  <p class=row>0258</p>
  </td>
<td>
  <p class=row>Reversed E</p>
  </td>
  <td>
  <p class=row>close-mid central unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>34.</p>
  </td>
<td>
  <p class=glyph><a name=ipa303>&#603;</a></p>
  </td>
<td>
  <p class=key>e&lt;</p>
  </td>
<td>
  <p class=row>303</p>
  </td>
<td>
  <p class=row>025B</p>
  </td>
<td>
  <p class=row>Epsilon</p>
  </td>
  <td>
  <p class=row>open-mid front unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>35.</p>
  </td>
<td>
  <p class=glyph><a name=ipa396>&#666;</a></p>
  </td>
<td>
  <p class=key>e|</p>
  </td>
<td>
  <p class=row>396</p>
  </td>
<td>
  <p class=row>029A</p>
  </td>
<td>
  <p class=row>Closed epsilon</p>
  </td>
  <td>
  <p class=row>open-mid central rounded vowel<i> (superceded by 395, 1996)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>36.</p>
  </td>
<td>
  <p class=glyph><a name=ipa326>&#604;</a></p>
  </td>
<td>
  <p class=key>e&gt;</p>
  </td>
<td>
  <p class=row>326</p>
  </td>
<td>
  <p class=row>025C</p>
  </td>
<td>
  <p class=row>Reversed epsilon</p>
  </td>
  <td>
  <p class=row>open-mid central unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>37.</p>
  </td>
<td>
  <p class=glyph><a name=ipa395>&#606;</a></p>
  </td>
<td>
  <p class=key>O&lt;</p>
  </td>
<td>
  <p class=row>395</p>
  </td>
<td>
  <p class=row>025E</p>
  </td>
<td>
  <p class=row>Closed reversed epsilon</p>
  </td>
  <td>
  <p class=row>open-mid central rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>38.</p>
  </td>
<td>
  <p class=glyph>E</p>
  </td>
<td>
  <p class=key>E</p>
  </td>
<td>
  <p class=row>705</p>
  </td>
<td>
  <p class=row>0045</p>
  </td>
<td>
  <p class=row>Upper-case E</p>
  </td>
  <td>
  <p class=row>E</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>39.</p>
  </td>
<td>
  <p class=glyph><a name=ipa128>f</a></p>
  </td>
<td>
  <p class=key>f</p>
  </td>
<td>
  <p class=row>128</p>
  </td>
<td>
  <p class=row>0066</p>
  </td>
<td>
  <p class=row>Lowercase F</p>
  </td>
  <td>
  <p class=row>vl labiodental fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>40.</p>
  </td>
<td>
  <p class=glyphgreen>&#681;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>602</p>
  </td>
<td>
  <p class=row>02A9</p>
  </td>
<td>
  <p class=row>F-Eng ligature</p>
  </td>
  <td>
  <p class=row>Velopharyngeal fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>41.</p>
  </td>
<td>
  <p class=glyph>F</p>
  </td>
<td>
  <p class=key>F</p>
  </td>
<td>
  <p class=row>622 (=706)</p>
  </td>
<td>
  <p class=row>0046</p>
  </td>
<td>
  <p class=row>Upper-case F</p>
  </td>
  <td>
  <p class=row>Falsetto</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>42.</p>
  </td>
<td>
  <p class=glyph>F</p>
  </td>
<td>
  <p class=key>F</p>
  </td>
<td>
  <p class=row>706 (use 622)</p>
  </td>
<td>
  <p class=row>0046</p>
  </td>
<td>
  <p class=row>Upper-case F</p>
  </td>
  <td>
  <p class=row>F (Falsetto)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>43.</p>
  </td>
<td>
  <p class=glyph><a name=ipa110>&#609;</a></p>
  </td>
<td>
  <p class=key>g&lt;</p>
  </td>
<td>
  <p class=row>110</p>
  </td>
<td>
  <p class=row>0261</p>
  </td>
<td>
  <p class=row>Opentail G</p>
  </td>
  <td>
  <p class=row>vd velar plosive<i> (equivalent to 210)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>44.</p>
  </td>
<td>
  <p class=glyph><a name=ipa166>&#608;</a></p>
  </td>
<td>
  <p class=key>g&gt;</p>
  </td>
<td>
  <p class=row>166</p>
  </td>
<td>
  <p class=row>0260</p>
  </td>
<td>
  <p class=row>Hooktop G</p>
  </td>
  <td>
  <p class=row>vd velar implosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>45.</p>
  </td>
  <td>
  <p class=glyph>g</p>
  </td>
<td>
  <p class=key>g</p>
  </td>
  <td>
  <p class=row>210</p>
  </td>
  <td>
  <p class=row>0067</p>
  </td>
  <td>
  <p class=row>Looptail G</p>
  </td>
  <td>
  <p class=row>vd velar plosive <i>(equivalent to 110)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>46.</p>
  </td>
<td>
  <p class=glyph><a name=ipa112>&#610;</a></p>
  </td>
<td>
  <p class=key>G=</p>
  </td>
<td>
  <p class=row>112</p>
  </td>
<td>
  <p class=row>0262</p>
  </td>
<td>
  <p class=row>Small
  Capital G</p>
  </td>
  <td>
  <p class=row>vd
  uvular plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>47.</p>
  </td>
<td>
  <p class=glyph><a name=ipa168>&#667;</a></p>
  </td>
<td>
  <p class=key>G&gt;</p>
  </td>
<td>
  <p class=row>168</p>
  </td>
<td>
  <p class=row>029B</p>
  </td>
<td>
  <p class=row>Hooktop
  Small Capital G</p>
  </td>
  <td>
  <p class=row>vd
  uvular implosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>48.</p>
  </td>
<td>
  <p class=glyph>G</p>
  </td>
<td>
  <p class=key>G</p>
  </td>
<td>
  <p class=row>707</p>
  </td>
<td>
  <p class=row>0047</p>
  </td>
<td>
  <p class=row>Upper-case G</p>
  </td>
  <td>
  <p class=row>G</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>49.</p>
  </td>
<td>
  <p class=glyph><a name=ipa141>&#611;</a></p>
  </td>
<td>
  <p class=key>g=</p>
  </td>
<td>
  <p class=row>141</p>
  </td>
<td>
  <p class=row>0263</p>
  </td>
<td>
  <p class=row>Gamma</p>
  </td>
  <td>
  <p class=row>vd
  velar fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>50.</p>
  </td>
<td>
  <p class=glyph><a name=ipa422>&#736;</a></p>
  </td>
<td>
  <p class=key>g=^</p>
  </td>
<td>
  <p class=row>422</p>
  </td>
<td>
  <p class=row>02E0</p>
  </td>
<td>
  <p class=row>Superscript Gamma</p>
  </td>
  <td>
  <p class=row>velarized</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>51.</p>
  </td>
<td>
  <p class=glyph><a name=ipa315>&#612;</a></p>
  </td>
<td>
  <p class=key>O&gt;</p>
  </td>
<td>
  <p class=row>315</p>
  </td>
<td>
  <p class=row>0264</p>
  </td>
<td>
  <p class=row>Ram's
  Horns</p>
  </td>
  <td>
  <p class=row>close-mid
  back unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>52.</p>
  </td>
<td>
  <p class=glyph><a name=ipa146>h</a></p>
  </td>
<td>
  <p class=key>h</p>
  </td>
<td>
  <p class=row>146</p>
  </td>
<td>
  <p class=row>0068</p>
  </td>
<td>
  <p class=row>Lowercase
  H</p>
  </td>
  <td>
  <p class=row>vl
  glottal fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>53.</p>
  </td>
<td>
  <p class=glyph><a name=ipa404>&#688;</a></p>
  </td>
<td>
  <p class=key>h^</p>
  </td>
<td>
  <p class=row>404
  (=671)</p>
  </td>
<td>
  <p class=row>02B0</p>
  </td>
<td>
  <p class=row>Superscript H</p>
  </td>
  <td>
  <p class=row>aspirated</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>54.</p>
  </td>
<td>
  <p class=glyph>&#688;</p>
  </td>
<td>
  <p class=key>h^</p>
  </td>
<td>
  <p class=row>671 (use 404)</p>
  </td>
<td>
  <p class=row>02B0</p>
  </td>
<td>
  <p class=row>Left-sited superscript H</p>
  </td>
  <td>
  <p class=row>Pre-aspiration</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>55.</p>
  </td>
<td>
  <p class=glyph><a name=ipa144>&#295;</a></p>
  </td>
<td>
  <p class=key>h&gt;</p>
  </td>
<td>
  <p class=row>144</p>
  </td>
<td>
  <p class=row>0127</p>
  </td>
<td>
  <p class=row>Crossed
  H</p>
  </td>
  <td>
  <p class=row>vl
  pharyngeal fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>56.</p>
  </td>
<td>
  <p class=glyph><a name=ipa147>&#614;</a></p>
  </td>
<td>
  <p class=key>h&lt;</p>
  </td>
<td>
  <p class=row>147</p>
  </td>
<td>
  <p class=row>0266</p>
  </td>
<td>
  <p class=row>Hooktop
  H</p>
  </td>
  <td>
  <p class=row>vd
  glottal fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>57.</p>
  </td>
<td>
  <p class=glyph><a name=ipa175>&#615;</a></p>
  </td>
<td>
  <p class=key>H&gt;</p>
  </td>
<td>
  <p class=row>175</p>
  </td>
<td>
  <p class=row>0267</p>
  </td>
<td>
  <p class=row>Hooked
  Heng</p>
  </td>
  <td>
  <p class=row>simultaneous
  vl postalveolar and velar fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>58.</p>
  </td>
<td>
  <p class=glyph><a name=ipa171>&#613;</a></p>
  </td>
<td>
  <p class=key>y&lt; <span class=row>or</span> h=</p>
  </td>
<td>
  <p class=row>171</p>
  </td>
<td>
  <p class=row>0265</p>
  </td>
<td>
  <p class=row>Turned
  H</p>
  </td>
  <td>
  <p class=row>vd
  labial-palatal approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>59.</p>
  </td>
<td>
  <p class=glyph><a name=ipa173>&#668;</a></p>
  </td>
<td>
  <p class=key>H=</p>
  </td>
<td>
  <p class=row>173</p>
  </td>
<td>
  <p class=row>029C</p>
  </td>
<td>
  <p class=row>Small
  Capital H</p>
  </td>
  <td>
  <p class=row>vl
  epiglottal fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>60.</p>
  </td>
<td>
  <p class=glyph>H</p>
  </td>
<td>
  <p class=key>H</p>
  </td>
<td>
  <p class=row>708</p>
  </td>
<td>
  <p class=row>0048</p>
  </td>
<td>
  <p class=row>Upper-case H</p>
  </td>
  <td>
  <p class=row>H</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>61.</p>
  </td>
<td>
  <p class=glyph><a name=ipa301>i</a></p>
  </td>
<td>
  <p class=key>i</p>
  </td>
<td>
  <p class=row>301</p>
  </td>
<td>
  <p class=row>0069</p>
  </td>
<td>
  <p class=row>Lowercase
  I</p>
  </td>
  <td>
  <p class=row>close
  front unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>62.</p>
  </td>
  <td>
  <p class=glyphgreen>&#305;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>394</p>
  </td>
  <td>
  <p class=row>0131</p>
  </td>
  <td>
  <p class=row>Undotted I</p>
  </td>
  <td>
  <p class=row><i>Not IPA usage</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>63.</p>
  </td>
<td>
  <p class=glyph><a name=ipa317>&#616;</a></p>
  </td>
<td>
  <p class=key>I=</p>
  </td>
<td>
  <p class=row>317</p>
  </td>
<td>
  <p class=row>0268</p>
  </td>
<td>
  <p class=row>Barred
  I</p>
  </td>
  <td>
  <p class=row>close
  central unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>64.</p>
  </td>
<td>
  <p class=glyph><a name=ipa399>&#617;</a></p>
  </td>
<td>
  <p class=key>i|</p>
  </td>
<td>
  <p class=row>399</p>
  </td>
<td>
  <p class=row>0269</p>
  </td>
<td>
  <p class=row>Iota</p>
  </td>
  <td>
  <p class=row>near-close near-front unrounded vowel <i>(superseded by 319, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>65.</p>
  </td>
<td>
  <p class=glyph><a name=ipa319>&#618;</a></p>
  </td>
<td>
  <p class=key>i=</p>
  </td>
<td>
  <p class=row>319</p>
  </td>
<td>
  <p class=row>026A</p>
  </td>
<td>
  <p class=row>Small
  Capital I</p>
  </td>
  <td>
  <p class=row>near-close
  near-front unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>66.</p>
  </td>
<td>
  <p class=glyph>I</p>
  </td>
<td>
  <p class=key>I</p>
  </td>
<td>
  <p class=row>709</p>
  </td>
<td>
  <p class=row>0049</p>
  </td>
<td>
  <p class=row>Upper-case I</p>
  </td>
  <td>
  <p class=row>I</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>67.</p>
  </td>
<td>
  <p class=glyph><a name=ipa153>j</a></p>
  </td>
<td>
  <p class=key>j</p>
  </td>
<td>
  <p class=row>153</p>
  </td>
<td>
  <p class=row>006A</p>
  </td>
<td>
  <p class=row>Lowercase
  J</p>
  </td>
  <td>
  <p class=row>vd
  palatal approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>68.</p>
  </td>
<td>
  <p class=glyph><a name=ipa421>&#690;</a></p>
  </td>
<td>
  <p class=key>j^</p>
  </td>
<td>
  <p class=row>421</p>
  </td>
<td>
  <p class=row>02B2</p>
  </td>
<td>
  <p class=row>Superscript J</p>
  </td>
  <td>
  <p class=row>palatalized</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>69.</p>
  </td>
<td>
  <p class=glyph><a name=ipa139>&#669;</a></p>
  </td>
<td>
  <p class=key>j&lt;</p>
  </td>
<td>
  <p class=row>139</p>
  </td>
<td>
  <p class=row>029D</p>
  </td>
<td>
  <p class=row>Curly-tail
  J</p>
  </td>
  <td>
  <p class=row>vd
  palatal fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>70.</p>
  </td>
  <td>
  <p class=glyphgreen>&#496;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>298</p>
  </td>
  <td>
  <p class=row>01F0</p>
  </td>
  <td>
  <p class=row>J wedge</p>
  </td>
  <td>
  <p class=row>vd postalveolar affricate <i>(not IPA usage)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>71.</p>
  </td>
<td>
  <p class=glyph><a name=ipa108>&#607;</a></p>
  </td>
<td>
  <p class=key>j=</p>
  </td>
<td>
  <p class=row>108</p>
  </td>
<td>
  <p class=row>025F</p>
  </td>
<td>
  <p class=row>Barred Dotless J</p>
  </td>
  <td>
  <p class=row>vd
  palatal plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>72.</p>
  </td>
<td>
  <p class=glyph><a name=ipa164>&#644;</a></p>
  </td>
<td>
  <p class=key>j&gt;</p>
  </td>
<td>
  <p class=row>164</p>
  </td>
<td>
  <p class=row>0284</p>
  </td>
<td>
  <p class=row>Hooktop
  Barred Dotless J</p>
  </td>
  <td>
  <p class=row>vd
  palatal implosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>73.</p>
  </td>
<td>
  <p class=glyph>J</p>
  </td>
<td>
  <p class=key>J</p>
  </td>
<td>
  <p class=row>626 (=710)</p>
  </td>
<td>
  <p class=row>004A</p>
  </td>
<td>
  <p class=row>Upper-case J</p>
  </td>
  <td>
  <p class=row>Jaw</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>74.</p>
  </td>
<td>
  <p class=glyph>J</p>
  </td>
<td>
  <p class=key>J</p>
  </td>
<td>
  <p class=row>710 (use 626)</p>
  </td>
<td>
  <p class=row>004A</p>
  </td>
<td>
  <p class=row>Upper-case J</p>
  </td>
  <td>
  <p class=row>J (Jaw)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>75.</p>
  </td>
<td>
  <p class=glyph><a name=ipa109>k</a></p>
  </td>
<td>
  <p class=key>k</p>
  </td>
<td>
  <p class=row>109</p>
  </td>
<td>
  <p class=row>006B</p>
  </td>
<td>
  <p class=row>Lowercase
  K</p>
  </td>
  <td>
  <p class=row>vl
  velar plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>76.</p>
  </td>
<td>
  <p class=glyph><a name=ipa165>&#409;</a></p>
  </td>
<td>
  <p class=key>k&gt;</p>
  </td>
<td>
  <p class=row>165</p>
  </td>
<td>
  <p class=row>0199</p>
  </td>
<td>
  <p class=row>Hooktop
  K</p>
  </td>
  <td>
  <p class=row>vl
  velar implosive <i>(withdrawn, 1993)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>77.</p>
  </td>
  <td>
  <p class=glyphgreen>&#670;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>291</p>
  </td>
  <td>
  <p class=row>029E</p>
  </td>
  <td>
  <p class=row>Turned K</p>
  </td>
  <td>
  <p class=row><i>Withdrawn, 1979</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>78.</p>
  </td>
<td>
  <p class=glyph>K</p>
  </td>
<td>
  <p class=key>K</p>
  </td>
<td>
  <p class=row>711</p>
  </td>
<td>
  <p class=row>004B</p>
  </td>
<td>
  <p class=row>Upper-case K</p>
  </td>
  <td>
  <p class=row>K</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>79.</p>
  </td>
<td>
  <p class=glyph><a name=ipa155>l</a></p>
  </td>
<td>
  <p class=key>l</p>
  </td>
<td>
  <p class=row>155</p>
  </td>
<td>
  <p class=row>006C</p>
  </td>
<td>
  <p class=row>Lowercase
  L</p>
  </td>
  <td>
  <p class=row>vd
  dental or alveolar lateral approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>80.</p>
  </td>
<td>
  <p class=glyph><a name=ipa426>&#737;</a></p>
  </td>
<td>
  <p class=key>l^</p>
  </td>
<td>
  <p class=row>426</p>
  </td>
<td>
  <p class=row>02E1</p>
  </td>
<td>
  <p class=row>Superscript L</p>
  </td>
  <td>
  <p class=row>lateral
  release</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>81.</p>
  </td>
<td>
  <p class=glyph><a name=ipa209>&#619;</a></p>
  </td>
<td>
  <p class=key>l~~</p>
  </td>
<td>
  <p class=row>209</p>
  </td>
<td>
  <p class=row>026B</p>
  </td>
<td>
  <p class=row>L
  with tilde</p>
  </td>
  <td>
  <p class=row>velarized
  vd dental or alveolar lateral approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>82.</p>
  </td>
<td>
  <p class=glyph><a name=ipa148>&#620;</a></p>
  </td>
<td>
  <p class=key>l=</p>
  </td>
<td>
  <p class=row>148</p>
  </td>
<td>
  <p class=row>026C</p>
  </td>
<td>
  <p class=row>Belted
  L</p>
  </td>
  <td>
  <p class=row>vl dental or alveolar lateral fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>83.</p>
  </td>
<td>
  <p class=glyph><a name=ipa156>&#621;</a></p>
  </td>
<td>
  <p class=key>l&lt;</p>
  </td>
<td>
  <p class=row>156</p>
  </td>
<td>
  <p class=row>026D</p>
  </td>
<td>
  <p class=row>Right-tail
  L</p>
  </td>
  <td>
  <p class=row>vd
  retroflex lateral approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>84.</p>
  </td>
<td>
  <p class=glyph><a name=ipa158>&#671;</a></p>
  </td>
<td>
  <p class=key>L=</p>
  </td>
<td>
  <p class=row>158</p>
  </td>
<td>
  <p class=row>029F</p>
  </td>
<td>
  <p class=row>Small
  Capital L</p>
  </td>
  <td>
  <p class=row>vd
  velar lateral approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>85.</p>
  </td>
<td>
  <p class=glyph><a name=ipa149>&#622;</a></p>
  </td>
<td>
  <p class=key>l&gt;</p>
  </td>
<td>
  <p class=row>149</p>
  </td>
<td>
  <p class=row>026E</p>
  </td>
<td>
  <p class=row>L-Ezh
  ligature</p>
  </td>
  <td>
  <p class=row>vd
  dental or alveolar lateral fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>86.</p>
  </td>
<td>
  <p class=glyphgreen>&#682;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>603</p>
  </td>
<td>
  <p class=row>02AA</p>
  </td>
<td>
  <p class=row>L-S ligature</p>
  </td>
  <td>
  <p class=row>Lateralized [s]</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>87.</p>
  </td>
<td>
  <p class=glyphgreen>&#683;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>604</p>
  </td>
<td>
  <p class=row>02AB</p>
  </td>
<td>
  <p class=row>L-Z ligature</p>
  </td>
  <td>
  <p class=row>Laterialized [z]</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>88.</p>
  </td>
  <td>
  <p class=glyphgreen>&#955;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>295</p>
  </td>
  <td>
  <p class=row>03BB</p>
  </td>
  <td>
  <p class=row>Lambda</p>
  </td>
  <td>
  <p class=row>vl dental or alveolar lateral fricative <i> (Not IPA usage)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>89.</p>
  </td>
  <td>
  <p class=glyphgreen>&#411;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>294</p>
  </td>
  <td>
  <p class=row>019B</p>
  </td>
  <td>
  <p class=row>Barred lambda</p>
  </td>
  <td>
  <p class=row>vl dental or alveolar lateral affricate <i> (Not IPA usage)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>90.</p>
  </td>
<td>
  <p class=glyph>L</p>
  </td>
<td>
  <p class=key>L</p>
  </td>
<td>
  <p class=row>625 (=712)</p>
  </td>
<td>
  <p class=row>004C</p>
  </td>
<td>
  <p class=row>Upper-case L</p>
  </td>
  <td>
  <p class=row>Larynx</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>91.</p>
  </td>
<td>
  <p class=glyph>L</p>
  </td>
<td>
  <p class=key>L</p>
  </td>
<td>
  <p class=row>712 (use 625)</p>
  </td>
<td>
  <p class=row>004C</p>
  </td>
<td>
  <p class=row>Upper-case L</p>
  </td>
  <td>
  <p class=row>L (Larynx)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>92.</p>
  </td>
<td>
  <p class=glyph><a name=ipa114>m</a></p>
  </td>
<td>
  <p class=key>m</p>
  </td>
<td>
  <p class=row>114</p>
  </td>
<td>
  <p class=row>006D</p>
  </td>
<td>
  <p class=row>Lowercase
  M</p>
  </td>
  <td>
  <p class=row>vd
  bilabial nasal</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>93.</p>
  </td>
<td>
  <p class=glyph><a name=ipa115>&#625;</a></p>
  </td>
<td>
  <p class=key>m&gt;</p>
  </td>
<td>
  <p class=row>115</p>
  </td>
<td>
  <p class=row>0271</p>
  </td>
<td>
  <p class=row>Left-tail
  M (at right)</p>
  </td>
  <td>
  <p class=row>vd
  labiodental nasal</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>94.</p>
  </td>
<td>
  <p class=glyph><a name=ipa316>&#623;</a></p>
  </td>
<td>
  <p class=key>u=</p>
  </td>
<td>
  <p class=row>316</p>
  </td>
<td>
  <p class=row>026F</p>
  </td>
<td>
  <p class=row>Turned
  M</p>
  </td>
  <td>
  <p class=row>close
  back unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>95.</p>
  </td>
<td>
  <p class=glyph><a name=ipa154>&#624;</a></p>
  </td>
<td>
  <p class=key>w&gt;</p>
  </td>
<td>
  <p class=row>154</p>
  </td>
<td>
  <p class=row>0270</p>
  </td>
<td>
  <p class=row>Turned
  M, Right Leg</p>
  </td>
  <td>
  <p class=row>vd
  velar approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>96.</p>
  </td>
<td>
  <p class=glyph>M</p>
  </td>
<td>
  <p class=key>M</p>
  </td>
<td>
  <p class=row>713</p>
  </td>
<td>
  <p class=row>004D</p>
  </td>
<td>
  <p class=row>Upper-case M</p>
  </td>
  <td>
  <p class=row>M</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>97.</p>
  </td>
<td>
  <p class=glyph><a name=ipa116>n</a></p>
  </td>
<td>
  <p class=key>n</p>
  </td>
<td>
  <p class=row>116</p>
  </td>
<td>
  <p class=row>006E</p>
  </td>
<td>
  <p class=row>Lowercase
  N</p>
  </td>
  <td>
  <p class=row>vd
  dental or alveolar nasal</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>98.</p>
  </td>
<td>
  <p class=glyph><a name=ipa425>&#8319;</a></p>
  </td>
<td>
  <p class=key>n^</p>
  </td>
<td>
  <p class=row>425</p>
  </td>
<td>
  <p class=row>207F</p>
  </td>
<td>
  <p class=row>Superscript N</p>
  </td>
  <td>
  <p class=row>nasal
  release</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>99.</p>
  </td>
  <td>
  <p class=glyphgreen>&#414;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>293</p>
  </td>
  <td>
  <p class=row>019E</p>
  </td>
  <td>
  <p class=row>N, right leg</p>
  </td>
  <td>
  <p class=row>syllabic nasal <i>(withdrawn, 1976)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>100.</p>
  </td>
  <td>
  <p class=glyph><a name=ipa118>&#626;</a></p>
  </td>
<td>
  <p class=key>n=</p>
  </td>
  <td>
  <p class=row>118</p>
  </td>
  <td>
  <p class=row>0272</p>
  </td>
  <td>
  <p class=row>Left-tail
  N (at left)</p>
  </td>
  <td>
  <p class=row>vd
  palatal nasal</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>101.</p>
  </td>
<td>
  <p class=glyph><a name=ipa119>&#331;</a></p>
  </td>
<td>
  <p class=key>n&gt;</p>
  </td>
<td>
  <p class=row>119</p>
  </td>
<td>
  <p class=row>014B</p>
  </td>
<td>
  <p class=row>Eng</p>
  </td>
  <td>
  <p class=row>vd
  velar nasal</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>102.</p>
  </td>
<td>
  <p class=glyph><a name=ipa117>&#627;</a></p>
  </td>
<td>
  <p class=key>n&lt;</p>
  </td>
<td>
  <p class=row>117</p>
  </td>
<td>
  <p class=row>0273</p>
  </td>
<td>
  <p class=row>Right-tail
  N</p>
  </td>
  <td>
  <p class=row>vd
  retroflex nasal</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>103.</p>
  </td>
<td>
  <p class=glyph><a name=ipa120>&#628;</a></p>
  </td>
<td>
  <p class=key>N=</p>
  </td>
<td>
  <p class=row>120</p>
  </td>
<td>
  <p class=row>0274</p>
  </td>
<td>
  <p class=row>Small
  Capital N</p>
  </td>
  <td>
  <p class=row>vd
  uvular nasal</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>104.</p>
  </td>
<td>
  <p class=glyph>N</p>
  </td>
<td>
  <p class=key>N</p>
  </td>
<td>
  <p class=row>714</p>
  </td>
<td>
  <p class=row>004E</p>
  </td>
<td>
  <p class=row>Upper-case N</p>
  </td>
  <td>
  <p class=row>N</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>105.</p>
  </td>
<td>
  <p class=glyph><a name=ipa307>o</a></p>
  </td>
<td>
  <p class=key>o</p>
  </td>
<td>
  <p class=row>307</p>
  </td>
<td>
  <p class=row>006F</p>
  </td>
<td>
  <p class=row>Lowercase
  O</p>
  </td>
  <td>
  <p class=row>close-mid
  back rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>106.</p>
  </td>
<td>
  <p class=glyph><a name=ipa176>&#664;</a></p>
  </td>
<td>
  <p class=key>p=</p>
  </td>
<td>
  <p class=row>176</p>
  </td>
<td>
  <p class=row>0298</p>
  </td>
<td>
  <p class=row>Bull's
  Eye</p>
  </td>
  <td>
  <p class=row>bilabial
  click</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>107.</p>
  </td>
<td>
  <p class=glyph><a name=ipa323>&#629;</a></p>
  </td>
<td>
  <p class=key>O=</p>
  </td>
<td>
  <p class=row>323</p>
  </td>
<td>
  <p class=row>0275</p>
  </td>
<td>
  <p class=row>Barred
  O</p>
  </td>
  <td>
  <p class=row>close-mid
  central rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>108.</p>
  </td>
<td>
  <p class=glyph><a name=ipa310>ø</a></p>
  </td>
<td>
  <p class=key>o&gt;</p>
  </td>
<td>
  <p class=row>310</p>
  </td>
<td>
  <p class=row>00F8</p>
  </td>
<td>
  <p class=row>Slashed
  O</p>
  </td>
  <td>
  <p class=row>close-mid
  front rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>109.</p>
  </td>
<td>
  <p class=glyph><a name=ipa311>œ</a></p>
  </td>
<td>
  <p class=key>E&lt;</p>
  </td>
<td>
  <p class=row>311</p>
  </td>
<td>
  <p class=row>0153</p>
  </td>
<td>
  <p class=row>Lowercase
  O-E ligature</p>
  </td>
  <td>
  <p class=row>open-mid
  front rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>110.</p>
  </td>
<td>
  <p class=glyph><a name=ipa312>&#630;</a></p>
  </td>
<td>
  <p class=key>E&gt;</p>
  </td>
<td>
  <p class=row>312</p>
  </td>
<td>
  <p class=row>0276</p>
  </td>
<td>
  <p class=row>Small
  Capital O-E ligature</p>
  </td>
  <td>
  <p class=row>open
  front rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>111.</p>
  </td>
<td>
  <p class=glyphgreen>Œ</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>627</p>
  </td>
<td>
  <p class=row>0152</p>
  </td>
<td>
  <p class=row>Upper-case O-E ligature</p>
  </td>
  <td>
  <p class=row>Oesophageal speech</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>112.</p>
  </td>
<td>
  <p class=glyph><a name=ipa306>&#596;</a></p>
  </td>
<td>
  <p class=key>o&lt;</p>
  </td>
<td>
  <p class=row>306</p>
  </td>
<td>
  <p class=row>0254</p>
  </td>
<td>
  <p class=row>Open
  O</p>
  </td>
  <td>
  <p class=row>open-mid
  back rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>113.</p>
  </td>
<td>
  <p class=glyph><a name=ipa398>&#631;</a></p>
  </td>
<td>
  <p class=key>u|</p>
  </td>
<td>
  <p class=row>398</p>
  </td>
<td>
  <p class=row>0277</p>
  </td>
<td>
  <p class=row>Closed
  omega</p>
  </td>
  <td>
  <p class=row>near-close
  near-back rounded vowel<i> (superceded by 321, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>114.</p>
  </td>
<td>
  <p class=glyph>O</p>
  </td>
<td>
  <p class=key>O</p>
  </td>
<td>
  <p class=row>715</p>
  </td>
<td>
  <p class=row>004F</p>
  </td>
<td>
  <p class=row>Upper-case O</p>
  </td>
  <td>
  <p class=row>O</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>115.</p>
  </td>
<td>
  <p class=glyph><a name=ipa101>p</a></p>
  </td>
<td>
  <p class=key>p</p>
  </td>
<td>
  <p class=row>101</p>
  </td>
<td>
  <p class=row>0070</p>
  </td>
<td>
  <p class=row>Lowercase
  P</p>
  </td>
  <td>
  <p class=row>vl
  bilabial plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>116.</p>
  </td>
<td>
  <p class=glyph><a name=ipa159>&#421;</a></p>
  </td>
<td>
  <p class=key>p&gt;</p>
  </td>
<td>
  <p class=row>159</p>
  </td>
<td>
  <p class=row>01A5</p>
  </td>
<td>
  <p class=row>Hooktop
  p</p>
  </td>
  <td>
  <p class=row>vl
  bilabial implosive <i>(withdrawn, 1993)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>117.</p>
  </td>
<td>
  <p class=glyph>P</p>
  </td>
<td>
  <p class=key>P</p>
  </td>
<td>
  <p class=row>716</p>
  </td>
<td>
  <p class=row>0050</p>
  </td>
<td>
  <p class=row>Upper-case P</p>
  </td>
  <td>
  <p class=row>P</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>118.</p>
  </td>
<td>
  <p class=glyph><a name=ipa126>&#632;</a></p>
  </td>
<td>
  <p class=key>f=</p>
  </td>
<td>
  <p class=row>126</p>
  </td>
<td>
  <p class=row>0278</p>
  </td>
<td>
  <p class=row>Phi</p>
  </td>
  <td>
  <p class=row>vl
  bilabial fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>119.</p>
  </td>
<td>
  <p class=glyph><a name=ipa111>q</a></p>
  </td>
<td>
  <p class=key>q</p>
  </td>
<td>
  <p class=row>111</p>
  </td>
<td>
  <p class=row>0071</p>
  </td>
<td>
  <p class=row>Lowercase
  Q</p>
  </td>
  <td>
  <p class=row>vl
  uvular plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>120.</p>
  </td>
<td>
  <p class=glyph><a name=ipa167>&#672;</a></p>
  </td>
<td>
  <p class=key>q&gt;</p>
  </td>
<td>
  <p class=row>167</p>
  </td>
<td>
  <p class=row>02A0</p>
  </td>
<td>
  <p class=row>Hooktop
  q</p>
  </td>
  <td>
  <p class=row>vl
  uvular implosive <i>(withdrawn, 1993)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>121.</p>
  </td>
<td>
  <p class=glyph>Q</p>
  </td>
<td>
  <p class=key>Q</p>
  </td>
<td>
  <p class=row>717</p>
  </td>
<td>
  <p class=row>0051</p>
  </td>
<td>
  <p class=row>Upper-case Q</p>
  </td>
  <td>
  <p class=row>Q</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>122.</p>
  </td>
<td>
  <p class=glyph><a name=ipa122>r</a></p>
  </td>
<td>
  <p class=key>r</p>
  </td>
<td>
  <p class=row>122</p>
  </td>
<td>
  <p class=row>0072</p>
  </td>
<td>
  <p class=row>Lowercase
  R</p>
  </td>
  <td>
  <p class=row>vd
  dental or alveolar trill</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>123.</p>
  </td>
<td>
  <p class=glyph><a name=ipa124>&#638;</a></p>
  </td>
<td>
  <p class=key>r&gt;</p>
  </td>
<td>
  <p class=row>124</p>
  </td>
<td>
  <p class=row>027E</p>
  </td>
<td>
  <p class=row>Fish-hook
  R</p>
  </td>
  <td>
  <p class=row>vd
  dental or alveolar tap</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>124.</p>
  </td>
  <td>
  <p class=glyphgreen>&#636;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>206</p>
  </td>
  <td>
  <p class=row>027C</p>
  </td>
  <td>
  <p class=row>Long-leg r</p>
  </td>
  <td>
  <p class=row><i>Withdrawn, 1989</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>125.</p>
  </td>
<td>
  <p class=glyph><a name=ipa181>&#634;</a></p>
  </td>
<td>
  <p class=key>L&gt;</p>
  </td>
<td>
  <p class=row>181</p>
  </td>
<td>
  <p class=row>027A</p>
  </td>
<td>
  <p class=row>Turned
  Long-leg R</p>
  </td>
  <td>
  <p class=row>vd
  alveolar lateral flap</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>126.</p>
  </td>
<td>
  <p class=glyph><a name=ipa125>&#637;</a></p>
  </td>
<td>
  <p class=key>r&lt;</p>
  </td>
<td>
  <p class=row>125</p>
  </td>
<td>
  <p class=row>027D</p>
  </td>
<td>
  <p class=row>Right-tail
  R</p>
  </td>
  <td>
  <p class=row>vd
  retroflex flap</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>127.</p>
  </td>
<td>
  <p class=glyph><a name=ipa151>&#633;</a></p>
  </td>
<td>
  <p class=key>r=</p>
  </td>
<td>
  <p class=row>151</p>
  </td>
<td>
  <p class=row>0279</p>
  </td>
<td>
  <p class=row>Turned
  R</p>
  </td>
  <td>
  <p class=row>vd
  dental or alveolar approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>128.</p>
  </td>
<td>
  <p class=glyph><a name=ipa152>&#635;</a></p>
  </td>
<td>
  <p class=key>R&lt;</p>
  </td>
<td>
  <p class=row>152</p>
  </td>
<td>
  <p class=row>027B</p>
  </td>
<td>
  <p class=row>Turned
  R, Right Tail</p>
  </td>
  <td>
  <p class=row>vd
  retroflex approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>129.</p>
  </td>
<td>
  <p class=glyph><a name=ipa123>&#640;</a></p>
  </td>
<td>
  <p class=key>R=</p>
  </td>
<td>
  <p class=row>123</p>
  </td>
<td>
  <p class=row>0280</p>
  </td>
<td>
  <p class=row>Small
  Capital R</p>
  </td>
  <td>
  <p class=row>vd
  uvular trill</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>130.</p>
  </td>
<td>
  <p class=glyph>R</p>
  </td>
<td>
  <p class=key>R</p>
  </td>
<td>
  <p class=row>718</p>
  </td>
<td>
  <p class=row>0052</p>
  </td>
<td>
  <p class=row>Upper-case R</p>
  </td>
  <td>
  <p class=row>R</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>131.</p>
  </td>
<td>
  <p class=glyph><a name=ipa143>&#641;</a></p>
  </td>
<td>
  <p class=key>R&gt;</p>
  </td>
<td>
  <p class=row>143</p>
  </td>
<td>
  <p class=row>0281</p>
  </td>
<td>
  <p class=row>Inverted
  Small Capital R</p>
  </td>
  <td>
  <p class=row>vd
  uvular fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>132.</p>
  </td>
<td>
  <p class=glyph>&#694;</p>
  </td>
<td>
  <p class=key>R&gt;^</p>
  </td>
<td>
  <p class=row>676</p>
  </td>
<td>
  <p class=row>02B6</p>
  </td>
<td>
  <p class=row>Superscript inverted small capital R</p>
  </td>
  <td>
  <p class=row>Uvularized</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>133.</p>
  </td>
<td>
  <p class=glyph><a name=ipa132>s</a></p>
  </td>
<td>
  <p class=key>s</p>
  </td>
<td>
  <p class=row>132</p>
  </td>
<td>
  <p class=row>0073</p>
  </td>
<td>
  <p class=row>Lowercase
  S</p>
  </td>
  <td>
  <p class=row>vl
  alveolar fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>134.</p>
  </td>
  <td>
  <p class=glyph>&#738;</p>
  </td>
<td>
  <p class=key>s^</p>
  </td>
  <td>
  <p class=row>207</p>
  </td>
  <td>
  <p class=row>02E2</p>
  </td>
  <td>
  <p class=row>Superscript S</p>
  </td>
  <td>
  <p class=row><i>Withdrawn, 1989</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>135.</p>
  </td>
  <td>
  <p class=glyphgreen>š</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>297</p>
  </td>
  <td>
  <p class=row>0161</p>
  </td>
  <td>
  <p class=row>S wedge</p>
  </td>
  <td>
  <p class=row>vl postalveolar fricative<i> (not IPA usage)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>136.</p>
  </td>
<td>
  <p class=glyph><a name=ipa136>&#642;</a></p>
  </td>
<td>
  <p class=key>s&lt;</p>
  </td>
<td>
  <p class=row>136</p>
  </td>
<td>
  <p class=row>0282</p>
  </td>
<td>
  <p class=row>Right-Tail
  S (at left)</p>
  </td>
  <td>
  <p class=row>vl
  retroflex fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>137.</p>
  </td>
<td>
  <p class=glyph>S</p>
  </td>
<td>
  <p class=key>S</p>
  </td>
<td>
  <p class=row>719</p>
  </td>
<td>
  <p class=row>0053</p>
  </td>
<td>
  <p class=row>Upper-case S</p>
  </td>
  <td>
  <p class=row>S</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>138.</p>
  </td>
<td>
  <p class=glyph><a name=ipa134>&#643;</a></p>
  </td>
<td>
  <p class=key>s=</p>
  </td>
<td>
  <p class=row>134</p>
  </td>
<td>
  <p class=row>0283</p>
  </td>
<td>
  <p class=row>Esh</p>
  </td>
  <td>
  <p class=row>vl
  postalveolar fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>139.</p>
  </td>
  <td>
  <p class=glyphgreen>&#646;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>204</p>
  </td>
  <td>
  <p class=row>0286</p>
  </td>
  <td>
  <p class=row>Curly-tail esh</p>
  </td>
  <td>
  <p class=row><i>Withdrawn, 1989</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>140.</p>
  </td>
<td>
  <p class=glyph><a name=ipa103>t</a></p>
  </td>
<td>
  <p class=key>t</p>
  </td>
<td>
  <p class=row>103</p>
  </td>
<td>
  <p class=row>0074</p>
  </td>
<td>
  <p class=row>Lowercase
  T</p>
  </td>
  <td>
  <p class=row>vl
  dental or alveolar plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>141.</p>
  </td>
<td>
  <p class=glyph><a name=ipa161>&#429;</a></p>
  </td>
<td>
  <p class=key>t&gt;</p>
  </td>
<td>
  <p class=row>161</p>
  </td>
<td>
  <p class=row>01AD</p>
  </td>
<td>
  <p class=row>Hooktop
  T</p>
  </td>
  <td>
  <p class=row>vl
  dental or alveolar implosive <i>(withdrawn, 1993)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>142.</p>
  </td>
  <td>
  <p class=glyphgreen>&#427;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>208</p>
  </td>
  <td>
  <p class=row>01AB</p>
  </td>
  <td>
  <p class=row>Left-hook T</p>
  </td>
  <td>
  <p class=row>palatalized vl dental or alveolar plosive <i>(withdrawn, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>143.</p>
  </td>
<td>
  <p class=glyph><a name=ipa105>&#648;</a></p>
  </td>
<td>
  <p class=key>t&lt;</p>
  </td>
<td>
  <p class=row>105</p>
  </td>
<td>
  <p class=row>0288</p>
  </td>
<td>
  <p class=row>Right-tail
  T</p>
  </td>
  <td>
  <p class=row>vl
  retroflex plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>144.</p>
  </td>
  <td>
  <p class=glyphgreen>&#678;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>211</p>
  </td>
  <td>
  <p class=row>02A6</p>
  </td>
  <td>
  <p class=row>T-S ligature</p>
  </td>
  <td>
  <p class=row>vl dental or alveolar affricate <i>(superceded by 103 + 132)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>145.</p>
  </td>
  <td>
  <p class=glyphgreen>&#679;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>213</p>
  </td>
  <td>
  <p class=row>02A7</p>
  </td>
  <td>
  <p class=row>T-Esh ligature</p>
  </td>
  <td>
  <p class=row>vl postalveolar affricate <i>(superceded by 103 + 134)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>146.</p>
  </td>
  <td>
  <p class=glyphgreen>&#680;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>215</p>
  </td>
  <td>
  <p class=row>02A8</p>
  </td>
  <td>
  <p class=row>T-Curly-tail-C ligature</p>
  </td>
  <td>
  <p class=row>vl alveolo-palatal affricate <i>(superceded by 103 + 182)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>147.</p>
  </td>
<td>
  <p class=glyph><a name=ipa201>&#647;</a></p>
  </td>
<td>
  <p class=key>T|</p>
  </td>
<td>
  <p class=row>201</p>
  </td>
<td>
  <p class=row>0287</p>
  </td>
<td>
  <p class=row>Turned
  T</p>
  </td>
  <td>
  <p class=row>dental
  click <i>(superceded by 177, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>148.</p>
  </td>
<td>
  <p class=glyph>T</p>
  </td>
<td>
  <p class=key>T</p>
  </td>
<td>
  <p class=row>720</p>
  </td>
<td>
  <p class=row>0054</p>
  </td>
<td>
  <p class=row>Upper-case T</p>
  </td>
  <td>
  <p class=row>T</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>149.</p>
  </td>
<td>
  <p class=glyph><a name=ipa130>&#952;</a></p>
  </td>
<td>
  <p class=key>t=</p>
  </td>
<td>
  <p class=row>130</p>
  </td>
<td>
  <p class=row>03B8</p>
  </td>
<td>
  <p class=row>Theta</p>
  </td>
  <td>
  <p class=row>vl
  dental fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>150.</p>
  </td>
  <td>
  <p class=glyph><a name=ipa217>&#7615;</a></p>
  </td>
<td>
  <p class=key>t=^</p>
  </td>
  <td>
  <p class=row>217</p>
  </td>
  <td>
  <p class=row>1DBF</p>
  </td>
  <td>
  <p class=row>Superscript theta</p>
  </td>
  <td>
  <p class=row>vl
  dental fricative release</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>151.</p>
  </td>
<td>
  <p class=glyphgreen>&#920;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>628</p>
  </td>
<td>
  <p class=row>0398</p>
  </td>
<td>
  <p class=row>Upper-case Greek Theta</p>
  </td>
  <td>
  <p class=row>Protruded-tongue voice</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>152.</p>
  </td>
<td>
  <p class=glyph><a name=ipa308>u</a></p>
  </td>
<td>
  <p class=key>u</p>
  </td>
<td>
  <p class=row>308</p>
  </td>
<td>
  <p class=row>0075</p>
  </td>
<td>
  <p class=row>Lowercase
  U</p>
  </td>
  <td>
  <p class=row>close
  back rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>153.</p>
  </td>
<td>
  <p class=glyph><a name=ipa318>&#649;</a></p>
  </td>
<td>
  <p class=key>U=</p>
  </td>
<td>
  <p class=row>318</p>
  </td>
<td>
  <p class=row>0289</p>
  </td>
<td>
  <p class=row>Barred
  U</p>
  </td>
  <td>
  <p class=row>close
  central rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>154.</p>
  </td>
<td>
  <p class=glyph><a name=ipa321>&#650;</a></p>
  </td>
<td>
  <p class=key>u&lt;</p>
  </td>
<td>
  <p class=row>321</p>
  </td>
<td>
  <p class=row>028A</p>
  </td>
<td>
  <p class=row>Upsilon</p>
  </td>
  <td>
  <p class=row>near-close
  near-back rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>155.</p>
  </td>
<td>
  <p class=glyph>U</p>
  </td>
<td>
  <p class=key>U</p>
  </td>
<td>
  <p class=row>721</p>
  </td>
<td>
  <p class=row>0055</p>
  </td>
<td>
  <p class=row>Upper-case U</p>
  </td>
  <td>
  <p class=row>U</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>156.</p>
  </td>
<td>
  <p class=glyph><a name=ipa129>v</a></p>
  </td>
<td>
  <p class=key>v</p>
  </td>
<td>
  <p class=row>129</p>
  </td>
<td>
  <p class=row>0076</p>
  </td>
<td>
  <p class=row>Lowercase
  V</p>
  </td>
  <td>
  <p class=row>vd
  labiodental fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>157.</p>
  </td>
<td>
  <p class=glyph>&#11377;</p>
  </td>
<td>
  <p class=key>v&lt;</p>
  </td>
<td>
  <p class=row>184</p>
  </td>
<td>
  <p class=row>2C71</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
  <td>
  <p class=row>labiodental
  flap</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>158.</p>
  </td>
<td>
  <p class=glyph><a name=ipa150>&#651;</a></p>
  </td>
<td>
  <p class=key>v=</p>
  </td>
<td>
  <p class=row>150</p>
  </td>
<td>
  <p class=row>028B</p>
  </td>
<td>
  <p class=row>Cursive
  V</p>
  </td>
  <td>
  <p class=row>vd
  labiodental approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>159.</p>
  </td>
<td>
  <p class=glyph>&#7609;</p>
  </td>
<td>
  <p class=key>v=^</p>
  </td>
<td>
  <p class=row>673</p>
  </td>
<td>
  <p class=row>1DB9</p>
  </td>
<td>
  <p class=row>Superscript cursive V</p>
  </td>
  <td>
  <p class=row>Labiodentalized</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>160.</p>
  </td>
<td>
  <p class=glyph><a name=ipa314>&#652;</a></p>
  </td>
<td>
  <p class=key>u&gt;</p>
  </td>
<td>
  <p class=row>314</p>
  </td>
<td>
  <p class=row>028C</p>
  </td>
<td>
  <p class=row>Turned
  V</p>
  </td>
  <td>
  <p class=row>open-mid
  back unrounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>161.</p>
  </td>
<td>
  <p class=glyph>V</p>
  </td>
<td>
  <p class=key>V</p>
  </td>
<td>
  <p class=row>621 (=722)</p>
  </td>
<td>
  <p class=row>0056</p>
  </td>
<td>
  <p class=row>Upper-case V</p>
  </td>
  <td>
  <p class=row>Voice</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>162.</p>
  </td>
<td>
  <p class=glyph>V</p>
  </td>
<td>
  <p class=key>V</p>
  </td>
<td>
  <p class=row>722 (use 621)</p>
  </td>
<td>
  <p class=row>0056</p>
  </td>
<td>
  <p class=row>Upper-case V</p>
  </td>
  <td>
  <p class=row>V (Voice)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>163.</p>
  </td>
<td>
  <p class=glyph><a name=ipa170>w</a></p>
  </td>
<td>
  <p class=key>w</p>
  </td>
<td>
  <p class=row>170</p>
  </td>
<td>
  <p class=row>0077</p>
  </td>
<td>
  <p class=row>Lowercase
  W</p>
  </td>
  <td>
  <p class=row>vd
  labial-velar approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>164.</p>
  </td>
<td>
  <p class=glyph><a name=ipa420>&#695;</a></p>
  </td>
<td>
  <p class=key>w^</p>
  </td>
<td>
  <p class=row>420</p>
  </td>
<td>
  <p class=row>02B7</p>
  </td>
<td>
  <p class=row>Superscript W</p>
  </td>
  <td>
  <p class=row>labialized</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>165.</p>
  </td>
<td>
  <p class=glyph><a name=ipa169>&#653;</a></p>
  </td>
<td>
  <p class=key>w=</p>
  </td>
<td>
  <p class=row>169</p>
  </td>
<td>
  <p class=row>028D</p>
  </td>
<td>
  <p class=row>Turned
  W</p>
  </td>
  <td>
  <p class=row>vl
  labial-velar fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>166.</p>
  </td>
<td>
  <p class=glyph>W</p>
  </td>
<td>
  <p class=key>W</p>
  </td>
<td>
  <p class=row>623 (=723)</p>
  </td>
<td>
  <p class=row>0057</p>
  </td>
<td>
  <p class=row>Upper-case W</p>
  </td>
  <td>
  <p class=row>Whisper</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>167.</p>
  </td>
<td>
  <p class=glyph>W</p>
  </td>
<td>
  <p class=key>W</p>
  </td>
<td>
  <p class=row>723 (use 623)</p>
  </td>
<td>
  <p class=row>0057</p>
  </td>
<td>
  <p class=row>Upper-case W</p>
  </td>
  <td>
  <p class=row>W (Whisper)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>168.</p>
  </td>
<td>
  <p class=glyph><a name=ipa140>x</a></p>
  </td>
<td>
  <p class=key>x</p>
  </td>
<td>
  <p class=row>140</p>
  </td>
<td>
  <p class=row>0078</p>
  </td>
<td>
  <p class=row>Lowercase
  X</p>
  </td>
  <td>
  <p class=row>vl
  velar fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>169.</p>
  </td>
<td>
  <p class=glyph><a name=ipa292>&#739;</a></p>
  </td>
<td>
  <p class=key>x^</p>
  </td>
<td>
  <p class=row>292</p>
  </td>
<td>
  <p class=row>02E3</p>
  </td>
<td>
  <p class=row>Superscript X</p>
  </td>
  <td>
  <p class=row>vl
  velar fricative release</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>170.</p>
  </td>
<td>
  <p class=glyph><a name=ipa142>&#967;</a></p>
  </td>
<td>
  <p class=key>x=</p>
  </td>
<td>
  <p class=row>142</p>
  </td>
<td>
  <p class=row>03C7</p>
  </td>
<td>
  <p class=row>Chi</p>
  </td>
  <td>
  <p class=row>vl
  uvular fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>171.</p>
  </td>
<td>
  <p class=glyph>X</p>
  </td>
<td>
  <p class=key>X</p>
  </td>
<td>
  <p class=row>724</p>
  </td>
<td>
  <p class=row>0058</p>
  </td>
<td>
  <p class=row>Upper-case X</p>
  </td>
  <td>
  <p class=row>X</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>172.</p>
  </td>
<td>
  <p class=glyph><a name=ipa309>y</a></p>
  </td>
<td>
  <p class=key>y</p>
  </td>
<td>
  <p class=row>309</p>
  </td>
<td>
  <p class=row>0079</p>
  </td>
<td>
  <p class=row>Lowercase
  Y</p>
  </td>
  <td>
  <p class=row>close
  front rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>173.</p>
  </td>
  <td>
  <p class=glyph>&#696;</p>
  </td>
<td>
  <p class=key>y^</p>
  </td>
  <td>
  <p class=row>496</p>
  </td>
  <td>
  <p class=row>02B8</p>
  </td>
  <td>
  <p class=row>Superscript Y</p>
  </td>
  <td>
  <p class=row>high-front rounding / palatalized <i>(not IPA usage)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>174.</p>
  </td>
<td>
  <p class=glyph><a name=ipa157>&#654;</a></p>
  </td>
<td>
  <p class=key>L&lt;</p>
  </td>
<td>
  <p class=row>157</p>
  </td>
<td>
  <p class=row>028E</p>
  </td>
<td>
  <p class=row>Turned
  Y</p>
  </td>
  <td>
  <p class=row>vd
  palatal lateral approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>175.</p>
  </td>
<td>
  <p class=glyph><a name=ipa320>&#655;</a></p>
  </td>
<td>
  <p class=key>Y=</p>
  </td>
<td>
  <p class=row>320</p>
  </td>
<td>
  <p class=row>028F</p>
  </td>
<td>
  <p class=row>Small
  Capital Y</p>
  </td>
  <td>
  <p class=row>near-close
  near-front rounded vowel</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>176.</p>
  </td>
<td>
  <p class=glyph>Y</p>
  </td>
<td>
  <p class=key>Y</p>
  </td>
<td>
  <p class=row>725</p>
  </td>
<td>
  <p class=row>0059</p>
  </td>
<td>
  <p class=row>Upper-case Y</p>
  </td>
  <td>
  <p class=row>Y</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>177.</p>
  </td>
<td>
  <p class=glyph><a name=ipa133>z</a></p>
  </td>
<td>
  <p class=key>z</p>
  </td>
<td>
  <p class=row>133</p>
  </td>
<td>
  <p class=row>007A</p>
  </td>
<td>
  <p class=row>Lowercase
  Z</p>
  </td>
  <td>
  <p class=row>vd
  alveolar fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>178.</p>
  </td>
  <td>
  <p class=glyphgreen>ž</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>296</p>
  </td>
  <td>
  <p class=row>017E</p>
  </td>
  <td>
  <p class=row>Z wedge</p>
  </td>
  <td>
  <p class=row>vd postalveolar fricative <i>(not IPA usage)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>179.</p>
  </td>
<td>
  <p class=glyph><a name=ipa183>&#657;</a></p>
  </td>
<td>
  <p class=key>z&gt;</p>
  </td>
<td>
  <p class=row>183</p>
  </td>
<td>
  <p class=row>0291</p>
  </td>
<td>
  <p class=row>Curly-tail
  Z</p>
  </td>
  <td>
  <p class=row>vd
  alveolo-palatal fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>180.</p>
  </td>
<td>
  <p class=glyph><a name=ipa137>&#656;</a></p>
  </td>
<td>
  <p class=key>z&lt;</p>
  </td>
<td>
  <p class=row>137</p>
  </td>
<td>
  <p class=row>0290</p>
  </td>
<td>
  <p class=row>Right-tail
  Z</p>
  </td>
  <td>
  <p class=row>vd
  retroflex fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>181.</p>
  </td>
<td>
  <p class=glyph><a name=ipa135>&#658;</a></p>
  </td>
<td>
  <p class=key>z=</p>
  </td>
<td>
  <p class=row>135</p>
  </td>
<td>
  <p class=row>0292</p>
  </td>
<td>
  <p class=row>Ezh;
  Tailed Z</p>
  </td>
  <td>
  <p class=row>vd
  postalveolar fricative</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>182.</p>
  </td>
  <td>
  <p class=glyphgreen>&#659;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>205</p>
  </td>
  <td>
  <p class=row>0293</p>
  </td>
  <td>
  <p class=row>Curly-tail ezh</p>
  </td>
  <td>
  <p class=row><i>Withdrawn, 1989</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>183.</p>
  </td>
<td>
  <p class=glyph>Z</p>
  </td>
<td>
  <p class=key>Z</p>
  </td>
<td>
  <p class=row>726</p>
  </td>
<td>
  <p class=row>005A</p>
  </td>
<td>
  <p class=row>Upper-case Z</p>
  </td>
  <td>
  <p class=row>Z</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>184.</p>
  </td>
<td>
  <p class=glyph><a name=ipa113>&#660;</a></p>
  </td>
<td>
  <p class=key>?=</p>
  </td>
<td>
  <p class=row>113</p>
  </td>
<td>
  <p class=row>0294</p>
  </td>
<td>
  <p class=row>Glottal
  Stop</p>
  </td>
  <td>
  <p class=row>glottal
  plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>185.</p>
  </td>
<td>
  <p class=glyph><a name=ipa145>&#661;</a></p>
  </td>
<td>
  <p class=key>?&lt;</p>
  </td>
<td>
  <p class=row>145</p>
  </td>
<td>
  <p class=row>0295</p>
  </td>
<td>
  <p class=row>Reversed
  Glottal Stop</p>
  </td>
  <td>
  <p class=row>vd
  pharyngeal fricative or approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>186.</p>
  </td>
<td>
  <p class=glyph><a name=ipa172>&#673;</a></p>
  </td>
<td>
  <p class=key>Q=</p>
  </td>
<td>
  <p class=row>172</p>
  </td>
<td>
  <p class=row>02A1</p>
  </td>
<td>
  <p class=row>Barred
  Glottal Stop</p>
  </td>
  <td>
  <p class=row>epiglottal
  plosive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>187.</p>
  </td>
<td>
  <p class=glyph><a name=ipa174>&#674;</a></p>
  </td>
<td>
  <p class=key>Q&lt;</p>
  </td>
<td>
  <p class=row>174</p>
  </td>
<td>
  <p class=row>02A2</p>
  </td>
<td>
  <p class=row>Barred
  Reversed Glottal Stop</p>
  </td>
  <td>
  <p class=row>vd
  epiglottal fricative or approximant</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>188.</p>
  </td>
<td>
  <p class=glyph><a name=ipa177>&#448;</a></p>
  </td>
<td>
  <p class=key>!&lt;</p>
  </td>
<td>
  <p class=row>177</p>
  </td>
<td>
  <p class=row>01C0</p>
  </td>
<td>
  <p class=row>Pipe</p>
  </td>
  <td>
  <p class=row>dental
  click</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>189.</p>
  </td>
<td>
  <p class=glyph><a name=ipa178>&#451;</a></p>
  </td>
<td>
  <p class=key>!</p>
  </td>
<td>
  <p class=row>178</p>
  </td>
<td>
  <p class=row>01C3</p>
  </td>
<td>
  <p class=row>Exclamation
  Point</p>
  </td>
  <td>
  <p class=row>(post)alveolar
  click </p>
  </td>
 </tr>
 <tr>
  <td>
  <p>190.</p>
  </td>
<td>
  <p class=glyph><a name=ipa179>&#450;</a></p>
  </td>
<td>
  <p class=key>!=</p>
  </td>
<td>
  <p class=row>179</p>
  </td>
<td>
  <p class=row>01C2</p>
  </td>
<td>
  <p class=row>Double-barred
  Pipe</p>
  </td>
  <td>
  <p class=row>palatoalveolar
  click</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>191.</p>
  </td>
<td>
  <p class=glyph><a name=ipa180>&#8214;</a></p>
  </td>
<td>
  <p class=key>!&gt;</p>
  </td>
<td>
  <p class=row>180</p>
  </td>
<td>
  <p class=row>01C1</p>
  </td>
<td>
  <p class=row>Double
  Vertical Line</p>
  </td>
  <td>
  <p class=row>alveolar
  lateral click</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>192.</p>
  </td>
  <td>
  <p class=glyphgreen>&#662;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>203</p>
  </td>
  <td>
  <p class=row>0296</p>
  </td>
  <td>
  <p class=row>Inverted glottal stop</p>
  </td>
  <td>
  <p class=row>alveolar lateral click<i> (superceded by 180, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>193.</p>
  </td>
  <td>
  <p class=glyphgreen>&#443;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>290</p>
  </td>
  <td>
  <p class=row>01BB</p>
  </td>
  <td>
  <p class=row>Barred two</p>
  </td>
  <td>
  <p class=row><i>Withdrawn, 1976</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>194.</p>
  </td>
<td>
  <p class=glyph><a name=ipa401>&#700;</a></p>
  </td>
<td>
  <p class=key>]]</p>
  </td>
<td>
  <p class=row>401</p>
  </td>
<td>
  <p class=row>02BC</p>
  </td>
<td>
  <p class=row>Apostrophe</p>
  </td>
  <td>
  <p class=row>ejective</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>195.</p>
  </td>
<td>
  <p class=glyph><a name=ipa402>&#9676;&#805;</a></p>
  </td>
<td>
  <p class=key>%</p>
  </td>
<td>
  <p class=row>402a</p>
  </td>
<td>
  <p class=row>0325</p>
  </td>
<td>
  <p class=row>Under-ring</p>
  </td>
  <td>
  <p class=row>voiceless</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>196.</p>
  </td>
<td>
  <p class=glyph><a name=ipa402b>&#9676;&#778;</a></p>
  </td>
<td>
  <p class=key>@</p>
  </td>
<td>
  <p class=row>402b</p>
  </td>
<td>
  <p class=row>030A</p>
  </td>
<td>
  <p class=row>Over-ring</p>
  </td>
  <td>
  <p class=row>voiceless
  (use if character has descender)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>197.</p>
  </td>
<td>
  <p class=glyph>&#9676;&#812;</p>
  </td>
<td>
  <p class=key>%%</p>
  </td>
<td>
  <p class=row>403
  (=663, 664)</p>
  </td>
<td>
  <p class=row>032C</p>
  </td>
<td>
  <p class=row>Subscript
  Wedge</p>
  </td>
  <td>
  <p class=row>voiced</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>198.</p>
  </td>
<td>
  <p class=glyph>&#9676;&#804;</p>
  </td>
<td>
  <p class=key>%%%</p>
  </td>
<td>
  <p class=row>405</p>
  </td>
<td>
  <p class=row>0324</p>
  </td>
<td>
  <p class=row>Subscript
  Umlaut</p>
  </td>
  <td>
  <p class=row>breathy
  voiced</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>199.</p>
  </td>
<td>
  <p class=glyph><a name=ipa406>&#9676;&#816;</a></p>
  </td>
<td>
  <p class=key>$$$</p>
  </td>
<td>
  <p class=row>406</p>
  </td>
<td>
  <p class=row>0330</p>
  </td>
<td>
  <p class=row>Subscript
  Tilde</p>
  </td>
  <td>
  <p class=row>creaky
  voiced</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>200.</p>
  </td>
<td>
  <p class=glyph><a name=ipa407>&#9676;</a>&#828;</p>
  </td>
<td>
  <p class=key>{{{{</p>
  </td>
<td>
  <p class=row>407</p>
  </td>
<td>
  <p class=row>033C</p>
  </td>
<td>
  <p class=row>Subscript
  Seagull</p>
  </td>
  <td>
  <p class=row>linguolabial</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>201.</p>
  </td>
<td>
  <p class=glyph><a name=ipa408>&#9676;</a>&#810;</p>
  </td>
<td>
  <p class=key>{</p>
  </td>
<td>
  <p class=row>408</p>
  </td>
<td>
  <p class=row>032A</p>
  </td>
<td>
  <p class=row>Subscript Bridge</p>
  </td>
  <td>
  <p class=row>dental</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>202.</p>
  </td>
<td>
  <p class=glyph>&#9676;&#826;</p>
  </td>
<td>
  <p class=key>{{</p>
  </td>
<td>
  <p class=row>409</p>
  </td>
<td>
  <p class=row>033A</p>
  </td>
<td>
  <p class=row>Inverted
  Subscript Bridge</p>
  </td>
  <td>
  <p class=row>apical</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>203.</p>
  </td>
<td>
  <p class=glyph><a name=ipa410>&#9676;</a>&#827;</p>
  </td>
<td>
  <p class=key>{{{</p>
  </td>
<td>
  <p class=row>410</p>
  </td>
<td>
  <p class=row>033B</p>
  </td>
<td>
  <p class=row>Subscript
  Square</p>
  </td>
  <td>
  <p class=row>laminal</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>204.</p>
  </td>
<td>
  <p class=glyph><a name=ipa411>&#9676;</a>&#825;</p>
  </td>
<td>
  <p class=key>++++</p>
  </td>
<td>
  <p class=row>411</p>
  </td>
<td>
  <p class=row>0339</p>
  </td>
<td>
  <p class=row>Subscript
  Right Half-ring</p>
  </td>
  <td>
  <p class=row>more
  rounded</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>205.</p>
  </td>
<td>
  <p class=glyph><a name=ipa412>&#9676;</a>&#796;</p>
  </td>
<td>
  <p class=key>____</p>
  </td>
<td>
  <p class=row>412</p>
  </td>
<td>
  <p class=row>031C</p>
  </td>
<td>
  <p class=row>Subscript
  Left Half-ring</p>
  </td>
  <td>
  <p class=row>less
  rounded</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>206.</p>
  </td>
<td>
  <p class=glyph><a name=ipa413>&#9676;&#799;</a></p>
  </td>
<td>
  <p class=key>+</p>
  </td>
<td>
  <p class=row>413</p>
  </td>
<td>
  <p class=row>031F</p>
  </td>
<td>
  <p class=row>Subscript
  Plus</p>
  </td>
  <td>
  <p class=row>advanced</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>207.</p>
  </td>
<td>
  <p class=glyph><a name=ipa414>&#9676;</a>&#800;</p>
  </td>
<td>
  <p class=key>_</p>
  </td>
<td>
  <p class=row>414</p>
  </td>
<td>
  <p class=row>0320</p>
  </td>
<td>
  <p class=row>Under-bar</p>
  </td>
  <td>
  <p class=row>retracted</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>208.</p>
  </td>
<td>
  <p class=glyph><a name=ipa415>&#9676;</a>&#776;</p>
  </td>
<td>
  <p class=key>*</p>
  </td>
<td>
  <p class=row>415</p>
  </td>
<td>
  <p class=row>0308</p>
  </td>
<td>
  <p class=row>Umlaut</p>
  </td>
  <td>
  <p class=row>centralized</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>209.</p>
  </td>
<td>
  <p class=glyph><a name=ipa416>&#9676;</a>&#829;</p>
  </td>
<td>
  <p class=key>**</p>
  </td>
<td>
  <p class=row>416</p>
  </td>
<td>
  <p class=row>033D</p>
  </td>
<td>
  <p class=row>Over-cross</p>
  </td>
  <td>
  <p class=row>mid-centralized</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>210.</p>
  </td>
<td>
  <p class=glyph><a name=ipa417>&#9676;</a>&#792;</p>
  </td>
<td>
  <p class=key>+++</p>
  </td>
<td>
  <p class=row>417</p>
  </td>
<td>
  <p class=row>0318</p>
  </td>
<td>
  <p class=row>Advancing
  Sign</p>
  </td>
  <td>
  <p class=row>advanced
  tongue root</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>211.</p>
  </td>
<td>
  <p class=glyph>&#9676;&#793;</p>
  </td>
<td>
  <p class=key>___</p>
  </td>
<td>
  <p class=row>418</p>
  </td>
<td>
  <p class=row>0319</p>
  </td>
<td>
  <p class=row>Retracting
  Sign</p>
  </td>
  <td>
  <p class=row>retracted
  tongue root</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>212.</p>
  </td>
<td>
  <p class=glyph><a name=ipa419>&#9676;&#734;</a></p>
  </td>
<td>
  <p class=key>[[[</p>
  </td>
<td>
  <p class=row>419</p>
  </td>
<td>
  <p class=row>02DE</p>
  </td>
<td>
  <p class=row>Right
  Hook</p>
  </td>
  <td>
  <p class=row>rhoticity</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>213.</p>
  </td>
<td>
  <p class=glyph><a name=ipa423>&#740;</a></p>
  </td>
<td>
  <p class=key>?&lt;^</p>
  </td>
<td>
  <p class=row>423</p>
  </td>
<td>
  <p class=row>02E4</p>
  </td>
<td>
  <p class=row>Superscript reversed glottal stop</p>
  </td>
  <td>
  <p class=row>pharyngealized</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>214.</p>
  </td>
<td>
  <p class=glyph><a name=ipa424>&#9676;</a>&#771;</p>
  </td>
<td>
  <p class=key>~</p>
  </td>
<td>
  <p class=row>424</p>
  </td>
<td>
  <p class=row>0303</p>
  </td>
<td>
  <p class=row>Superscript Tilde</p>
  </td>
  <td>
  <p class=row>nasalized</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>215.</p>
  </td>
<td>
  <p class=glyph><a name=ipa427>&#9676;&#794;</a></p>
  </td>
<td>
  <p class=key>]]]</p>
  </td>
<td>
  <p class=row>427</p>
  </td>
<td>
  <p class=row>031A</p>
  </td>
<td>
  <p class=row>Corner</p>
  </td>
  <td>
  <p class=row>no
  audible release</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>216.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#820;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>428</p>
  </td>
<td>
  <p class=row>0334</p>
  </td>
<td>
  <p class=row>Superimposed tilde</p>
  </td>
  <td>
  <p class=row>Velarized or pharyngealized (use precomposed characters)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>217.</p>
  </td>
<td>
  <p class=glyph>&#9676;&#797;</p>
  </td>
<td>
  <p class=key>++</p>
  </td>
<td>
  <p class=row>429</p>
  </td>
<td>
  <p class=row>031D</p>
  </td>
<td>
  <p class=row>Raising
  Sign</p>
  </td>
  <td>
  <p class=row>raised</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>218.</p>
  </td>
<td>
  <p class=glyph>&#9676;&#798;</p>
  </td>
<td>
  <p class=key>__</p>
  </td>
<td>
  <p class=row>430</p>
  </td>
<td>
  <p class=row>031E</p>
  </td>
<td>
  <p class=row>Lowering
  Sign</p>
  </td>
  <td>
  <p class=row>lowered</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>219.</p>
  </td>
<td>
  <p class=glyph><a name=ipa431>&#9676;</a>&#809;</p>
  </td>
<td>
  <p class=key>$</p>
  </td>
<td>
  <p class=row>431</p>
  </td>
<td>
  <p class=row>0329</p>
  </td>
<td>
  <p class=row>Syllabicity
  Mark</p>
  </td>
  <td>
  <p class=row>syllabic</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>220.</p>
  </td>
<td>
  <p class=glyph><a name=ipa432>&#9676;</a>&#815;</p>
  </td>
<td>
  <p class=key>$$</p>
  </td>
<td>
  <p class=row>432</p>
  </td>
<td>
  <p class=row>032F</p>
  </td>
<td>
  <p class=row>Subscript
  Arch</p>
  </td>
  <td>
  <p class=row>non-syllabic</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>221.</p>
  </td>
<td>
  <p class=glyph><a name=ipa433> </a>&#865;</p>
  </td>
<td>
  <p class=key>#&amp;</p>
  </td>
<td>
  <p class=row>433</p>
  </td>
<td>
  <p class=row>0361</p>
  </td>
<td>
  <p class=row>Top
  Tie Bar</p>
  </td>
  <td>
  <p class=row>affricate
  or double articulation</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>222.</p>
  </td>
<td>
  <p class=glyph><a name=ipa509b>&#860;</a></p>
  </td>
<td>
  <p class=key>@&amp;</p>
  </td>
<td>
  <p class=row>433</p>
  </td>
<td>
  <p class=row>035C</p>
  </td>
<td>
  <p class=row>Bottom
  Tie Bar</p>
  </td>
  <td>
  <p class=row>affricate
  or double articulation</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>223.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#802;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>489</p>
  </td>
<td>
  <p class=row>0322</p>
  </td>
<td>
  <p class=row>Subscript right hook</p>
  </td>
  <td>
  <p class=row>Rhoticity<i> (Superseded by 419, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>224.</p>
  </td>
<td>
  <p class=glyphgreen>&#761;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>490</p>
  </td>
<td>
  <p class=row>?</p>
  </td>
<td>
  <p class=row>Open corner</p>
  </td>
  <td>
  <p class=row>Release / burst <i>(not IPA usage)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>225.</p>
  </td>
<td>
  <p class=glyph><a name=ipa491>,</a></p>
  </td>
<td>
  <p class=key>,</p>
  </td>
<td>
  <p class=row>491</p>
  </td>
<td>
  <p class=row>002C</p>
  </td>
<td>
  <p class=row>Comma</p>
  </td>
  <td>
  <p class=row>pause<i>
  (not IPA usage)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>226.</p>
  </td>
<td>
  <p class=glyph><a name=ipa492>&#699;</a></p>
  </td>
<td>
  <p class=key>]]]]</p>
  </td>
<td>
  <p class=row>492</p>
  </td>
<td>
  <p class=row>02BB</p>
  </td>
<td>
  <p class=row>Reversed
  apostrophe</p>
  </td>
  <td>
  <p class=row>weak
  aspiration<i> (withdrawn, 1979)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>227.</p>
  </td>
  <td>
  <p class=glyph><a name=ipa493>&#9676;&#775;</a></p>
  </td>
<td>
  <p class=key>****</p>
  </td>
  <td>
  <p class=row>493</p>
  </td>
  <td>
  <p class=row>0307</p>
  </td>
  <td>
  <p class=row>Over-dot</p>
  </td>
  <td>
  <p class=row>palatalization/centralization <i>(withdrawn,1979)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>228.</p>
  </td>
  <td>
  <p class=glyphgreen>&#727;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>494</p>
  </td>
  <td>
  <p class=row>02D7</p>
  </td>
  <td>
  <p class=row>Minus sign</p>
  </td>
  <td>
  <p class=row>retracted variety (backed)<i> (use 414 or 418, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>229.</p>
  </td>
  <td>
  <p class=glyphgreen>&#726;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
  <td>
  <p class=row>495</p>
  </td>
  <td>
  <p class=row>02D6</p>
  </td>
  <td>
  <p class=row>Plus sign</p>
  </td>
  <td>
  <p class=row>advanced variety (fronted) <i>(use 413 or 417, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>230.</p>
  </td>
  <td>
  <p class=glyph><a name=ipa497>&#9676;&#803;</a></p>
  </td>
<td>
  <p class=key>{{{{{</p>
  </td>
  <td>
  <p class=row>497</p>
  </td>
  <td>
  <p class=row>0323</p>
  </td>
  <td>
  <p class=row>Under-dot</p>
  </td>
  <td>
  <p class=row>closer variety / fricative <i>(use 429, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>231.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#801;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>498</p>
  </td>
<td>
  <p class=row>0321</p>
  </td>
<td>
  <p class=row>Subscript left hook</p>
  </td>
  <td>
  <p class=row>palatalized <i>(superseded by 421, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>232.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#811;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>499</p>
  </td>
<td>
  <p class=row>032B</p>
  </td>
<td>
  <p class=row>Subscript W</p>
  </td>
  <td>
  <p class=row>labialized <i>(superseded by 420, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>233.</p>
  </td>
<td>
  <p class=glyph><a name=ipa501>&#712;</a></p>
  </td>
<td>
  <p class=key>}</p>
  </td>
<td>
  <p class=row>501</p>
  </td>
<td>
  <p class=row>02C8</p>
  </td>
<td>
  <p class=row>Vertical
  Stroke (Superior)</p>
  </td>
  <td>
  <p class=row>primary
  stress </p>
  </td>
 </tr>
 <tr>
  <td>
  <p>234.</p>
  </td>
<td>
  <p class=glyph><a name=ipa502>&#716;</a></p>
  </td>
<td>
  <p class=key>}}</p>
  </td>
<td>
  <p class=row>502</p>
  </td>
<td>
  <p class=row>02CC</p>
  </td>
<td>
  <p class=row>Vertical
  Stroke (Inferior)</p>
  </td>
  <td>
  <p class=row>secondary
  stress</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>235.</p>
  </td>
<td>
  <p class=glyph><a name=ipa503>&#720;</a></p>
  </td>
<td>
  <p class=key>:</p>
  </td>
<td>
  <p class=row>503</p>
  </td>
<td>
  <p class=row>02D0</p>
  </td>
<td>
  <p class=row>Length
  Mark</p>
  </td>
  <td>
  <p class=row>length
  mark</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>236.</p>
  </td>
<td>
  <p class=glyph><a name=ipa504>&#721;</a></p>
  </td>
<td>
  <p class=key>::</p>
  </td>
<td>
  <p class=row>504</p>
  </td>
<td>
  <p class=row>02D1</p>
  </td>
<td>
  <p class=row>Half-length
  Mark</p>
  </td>
  <td>
  <p class=row>half-length</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>237.</p>
  </td>
<td>
  <p class=glyph><a name=ipa505>&#9676;</a>&#774;</p>
  </td>
<td>
  <p class=key>***</p>
  </td>
<td>
  <p class=row>505</p>
  </td>
<td>
  <p class=row>0306</p>
  </td>
<td>
  <p class=row>Breve</p>
  </td>
  <td>
  <p class=row>extra-short</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>238.</p>
  </td>
<td>
  <p class=glyph><a name=ipa506>.</a></p>
  </td>
<td>
  <p class=key>.</p>
  </td>
<td>
  <p class=row>506 (631, 632, 633)</p>
  </td>
<td>
  <p class=row>002E</p>
  </td>
<td>
  <p class=row>Period</p>
  </td>
  <td>
  <p class=row>syllable
  break</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>239.</p>
  </td>
<td>
  <p class=glyph><a name=ipa507>|</a></p>
  </td>
<td>
  <p class=key>.&lt;</p>
  </td>
<td>
  <p class=row>507</p>
  </td>
<td>
  <p class=row>007C</p>
  </td>
<td>
  <p class=row>Vertical
  Line</p>
  </td>
  <td>
  <p class=row>minor
  (foot) group</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>240.</p>
  </td>
<td>
  <p class=glyph><a name=ipa508>&#8214;</a></p>
  </td>
<td>
  <p class=key>.=</p>
  </td>
<td>
  <p class=row>508</p>
  </td>
<td>
  <p class=row>2016</p>
  </td>
<td>
  <p class=row>Double
  vertical line (thick)</p>
  </td>
  <td>
  <p class=row>major
  (intonation) group</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>241.</p>
  </td>
<td>
  <p class=glyph> <a
  name=ipa509>&#8255;</a></p>
  </td>
<td>
  <p class=key>#=</p>
  </td>
<td>
  <p class=row>509</p>
  </td>
<td>
  <p class=row>203F</p>
  </td>
<td>
  <p class=row>Bottom
  Tie Bar</p>
  </td>
  <td>
  <p class=row>linking
  (absence of a break)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>242.</p>
  </td>
<td>
  <p class=glyph><a name=ipa510>&#8599;</a></p>
  </td>
<td>
  <p class=key>#&gt;&gt;</p>
  </td>
<td>
  <p class=row>510</p>
  </td>
<td>
  <p class=row>2197</p>
  </td>
<td>
  <p class=row>Upward
  Diagonal Arrow</p>
  </td>
  <td>
  <p class=row>global
  rise</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>243.</p>
  </td>
<td>
  <p class=glyph><a name=ipa511>&#8600;</a></p>
  </td>
<td>
  <p class=key>#&lt;&lt;</p>
  </td>
<td>
  <p class=row>511</p>
  </td>
<td>
  <p class=row>2198</p>
  </td>
<td>
  <p class=row>Downward
  Diagonal Arrow</p>
  </td>
  <td>
  <p class=row>global
  fall</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>244.</p>
  </td>
<td>
  <p class=glyph><a name=ipa512>&#9676;&#779;</a></p>
  </td>
<td>
  <p class=key>@4</p>
  </td>
<td>
  <p class=row>512</p>
  </td>
<td>
  <p class=row>030B</p>
  </td>
<td>
  <p class=row>Double
  Acute Accent (over)</p>
  </td>
  <td>
  <p class=row>extra
  high level</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>245.</p>
  </td>
<td>
  <p class=glyph><a name=ipa513>&#9676;</a>&#769;</p>
  </td>
<td>
  <p class=key>@3</p>
  </td>
<td>
  <p class=row>513</p>
  </td>
<td>
  <p class=row>0301</p>
  </td>
<td>
  <p class=row>Acute
  Accent (over)</p>
  </td>
  <td>
  <p class=row>high
  level</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>246.</p>
  </td>
<td>
  <p class=glyph><a name=ipa514>&#9676;</a>&#772;</p>
  </td>
<td>
  <p class=key>@2</p>
  </td>
<td>
  <p class=row>514</p>
  </td>
<td>
  <p class=row>0304</p>
  </td>
<td>
  <p class=row>Macron</p>
  </td>
  <td>
  <p class=row>mid
  level</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>247.</p>
  </td>
<td>
  <p class=glyph><a name=ipa515>&#9676;</a>&#768;</p>
  </td>
<td>
  <p class=key>@1</p>
  </td>
<td>
  <p class=row>515</p>
  </td>
<td>
  <p class=row>0300</p>
  </td>
<td>
  <p class=row>Grave
  Accent (over)</p>
  </td>
  <td>
  <p class=row>low
  level</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>248.</p>
  </td>
<td>
  <p class=glyph><a name=ipa516>&#9676;</a>&#783;</p>
  </td>
<td>
  <p class=key>@0</p>
  </td>
<td>
  <p class=row>516</p>
  </td>
<td>
  <p class=row>030F</p>
  </td>
<td>
  <p class=row>Double
  Grave Accent (over)</p>
  </td>
  <td>
  <p class=row>extra
  low level</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>249.</p>
  </td>
<td>
  <p class=glyph><a name=ipa517>&#xA71C;</a></p>
  </td>
<td>
  <p class=key>#&lt;</p>
  </td>
<td>
  <p class=row>517</p>
  </td>
<td>
  <p class=row>A71C</p>
  </td>
<td>
  <p class=row>Down
  Arrow</p>
  </td>
  <td>
  <p class=row>downstep</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>250.</p>
  </td>
<td>
  <p class=glyph><a name=ipa518>&#xA71B;</a></p>
  </td>
<td>
  <p class=key>#&gt;</p>
  </td>
<td>
  <p class=row>518</p>
  </td>
<td>
  <p class=row>A71B</p>
  </td>
<td>
  <p class=row>Up
  Arrow</p>
  </td>
  <td>
  <p class=row>upstep</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>251.</p>
  </td>
<td>
  <p class=glyph><a name=ipa519>&#741;</a></p>
  </td>
<td>
  <p class=key>#4</p>
  </td>
<td>
  <p class=row>519</p>
  </td>
<td>
  <p class=row>02E5</p>
  </td>
<td>
  <p class=row>Extra-high
  Tone Bar</p>
  </td>
  <td>
  <p class=row>extra
  high level</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>252.</p>
  </td>
<td>
  <p class=glyph><a name=ipa520>&#742;</a></p>
  </td>
<td>
  <p class=key>#3</p>
  </td>
<td>
  <p class=row>520</p>
  </td>
<td>
  <p class=row>02E6</p>
  </td>
<td>
  <p class=row>High
  Tone Bar</p>
  </td>
  <td>
  <p class=row>high
  level</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>253.</p>
  </td>
<td>
  <p class=glyph><a name=ipa521>&#743;</a></p>
  </td>
<td>
  <p class=key>#2</p>
  </td>
<td>
  <p class=row>521</p>
  </td>
<td>
  <p class=row>02E7</p>
  </td>
<td>
  <p class=row>Mid
  Tone Bar</p>
  </td>
  <td>
  <p class=row>mid
  level</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>254.</p>
  </td>
<td>
  <p class=glyph><a name=ipa522>&#744;</a></p>
  </td>
<td>
  <p class=key>#1</p>
  </td>
<td>
  <p class=row>522</p>
  </td>
<td>
  <p class=row>02E8</p>
  </td>
<td>
  <p class=row>Low
  Tone Bar</p>
  </td>
  <td>
  <p class=row>low
  level</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>255.</p>
  </td>
<td>
  <p class=glyph><a name=ipa523>&#745;</a></p>
  </td>
<td>
  <p class=key>#0</p>
  </td>
<td>
  <p class=row>523</p>
  </td>
<td>
  <p class=row>02E9</p>
  </td>
<td>
  <p class=row>Extra-low
  Tone Bar</p>
  </td>
  <td>
  <p class=row>extra
  low level</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>256.</p>
  </td>
<td>
  <p class=glyph>&#9676;&#780;</p>
  </td>
<td>
  <p class=key>@13</p>
  </td>
<td>
  <p class=row>524</p>
  </td>
<td>
  <p class=row>030C</p>
  </td>
<td>
  <p class=row>Wedge</p>
  </td>
  <td>
  <p class=row>rising
  contour</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>257.</p>
  </td>
<td>
  <p class=glyph><a name=ipa525>&#9676;&#770;</a></p>
  </td>
<td>
  <p class=key>@31</p>
  </td>
<td>
  <p class=row>525</p>
  </td>
<td>
  <p class=row>0302</p>
  </td>
<td>
  <p class=row>Circumflex</p>
  </td>
  <td>
  <p class=row>falling
  contour</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>258.</p>
  </td>
<td>
  <p class=glyph><a name=ipa526>&#9676;&#7620;</a></p>
  </td>
<td>
  <p class=key>@23</p>
  </td>
<td>
  <p class=row>526</p>
  </td>
<td>
  <p class=row>1DC4</p>
  </td>
<td>
  <p class=row>Macron
  plus acute accent</p>
  </td>
  <td>
  <p class=row>high
  rising contour</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>259.</p>
  </td>
<td>
  <p class=glyph>&#9676;&#7621;</a></p>
  </td>
<td>
  <p class=key>@12</p>
  </td>
<td>
  <p class=row>527</p>
  </td>
<td>
  <p class=row>1DC5</p>
  </td>
<td>
  <p class=row>Grave
  accent plus macron</p>
  </td>
  <td>
  <p class=row>low
  rising contour</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>260.</p>
  </td>
<td>
  <p class=glyph>&#9676;&#7624;</a></p>
  </td>
<td>
  <p class=key>@131</p>
  </td>
<td>
  <p class=row>528</p>
  </td>
<td>
  <p class=row>1DC8</p>
  </td>
<td>
  <p class=row>Grave plus acute plus grave accent</p>
  </td>
  <td>
  <p class=row>rising-falling contour</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>261.</p>
  </td>
<td>
  <p class=glyph><a name=ipa529>&#745;&#741;</a></p>
  </td>
<td>
  <p class=key>#04</p>
  </td>
<td>
  <p class=row>529</p>
  </td>
<td>
  <p class=row>02E9
  02E5</p>
  </td>
<td>
  <p class=row>Rising
  tone letter</p>
  </td>
  <td>
  <p class=row>rising
  contour</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>262.</p>
  </td>
<td>
  <p class=glyph><a name=ipa530>&#741;&#745;</a></p>
  </td>
<td>
  <p class=key>#40</p>
  </td>
<td>
  <p class=row>530</p>
  </td>
<td>
  <p class=row>02E5
  02E9</p>
  </td>
<td>
  <p class=row>Falling
  tone letter</p>
  </td>
  <td>
  <p class=row>falling
  contour</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>263.</p>
  </td>
<td>
  <p class=glyph><a name=ipa531>&#743;&#741;</a></p>
  </td>
<td>
  <p class=key>#24</p>
  </td>
<td>
  <p class=row>531</p>
  </td>
<td>
  <p class=row>02E7
  02E5</p>
  </td>
<td>
  <p class=row>High-rising
  tone letter</p>
  </td>
  <td>
  <p class=row>high
  rising contour</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>264.</p>
  </td>
<td>
  <p class=glyph><a name=ipa532>&#745;&#743;</a></p>
  </td>
<td>
  <p class=key>#12</p>
  </td>
<td>
  <p class=row>532</p>
  </td>
<td>
  <p class=row>02E9
  02E7</p>
  </td>
<td>
  <p class=row>Low-rising
  tone letter</p>
  </td>
  <td>
  <p class=row>low
  rising contour</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>265.</p>
  </td>
<td>
  <p class=glyph><a name=ipa533>&#744;&#741;&#744;</a></p>
  </td>
<td>
  <p class=key>#141</p>
  </td>
<td>
  <p class=row>533</p>
  </td>
<td>
  <p class=row>02E8
  02E5 02E8</p>
  </td>
<td>
  <p class=row>Rising-falling
  tone letter</p>
  </td>
  <td>
  <p class=row>rising-falling
  contour</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>266.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#785;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>595</p>
  </td>
<td>
  <p class=row>0311</p>
  </td>
<td>
  <p class=row>Superscript arch</p>
  </td>
  <td>
  <p class=row>long falling tone / advanced / palatal <i>(not IPA usage)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>267.</p>
  </td>
<td>
  <p class=glyphgreen>&#711;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>596</p>
  </td>
<td>
  <p class=row>02C7</p>
  </td>
<td>
  <p class=row>Wedge; hác&#780;ek</p>
  </td>
  <td>
  <p class=row>falling-rising tone <i>(usage redefined,1989. See 524)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>268.</p>
  </td>
<td>
  <p class=glyphgreen>ˆ</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>597</p>
  </td>
<td>
  <p class=row>02C6</p>
  </td>
<td>
  <p class=row>Circumflex</p>
  </td>
  <td>
  <p class=row>rising-falling tone <i>(usage redefined, 1989. See 525)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>269.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#790;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>598</p>
  </td>
<td>
  <p class=row>0316 / 02CE</p>
  </td>
<td>
  <p class=row>Subscript grave accent</p>
  </td>
  <td>
  <p class=row>low falling tone <i>(superseded (1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>270.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#791;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>599</p>
  </td>
<td>
  <p class=row>0317 /  02CF</p>
  </td>
<td>
  <p class=row>Subscript acute accent</p>
  </td>
  <td>
  <p class=row>low rising tone <i>(superseded, 1989)</i></p>
  </td>
 </tr>
 <tr>
  <td>
  <p>271.</p>
  </td>
<td>
  <p class=glyphgreen>&#685;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>601</p>
  </td>
<td>
  <p class=row>02AD</p>
  </td>
<td>
  <p class=row>Double bridge</p>
  </td>
  <td>
  <p class=row>Bidental percussive</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>272.</p>
  </td>
<td>
  <p class=glyphgreen>&#10061;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>611</p>
  </td>
<td>
  <p class=row>274D</p>
  </td>
<td>
  <p class=row>Balloon</p>
  </td>
  <td>
  <p class=row>Unidentified segment(s)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>273.</p>
  </td>
<td>
  <p class=glyphgreen>*</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>612</p>
  </td>
<td>
  <p class=row>002A</p>
  </td>
<td>
  <p class=row>Asterisk</p>
  </td>
  <td>
  <p class=row>Placeholder symbol</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>274.</p>
  </td>
<td>
  <p class=row>(.)</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>631 (use 506)</p>
  </td>
<td>
  <p class=row>002E</p>
  </td>
<td>
  <p class=row>Bracketed single period</p>
  </td>
  <td>
  <p class=row>Short pause</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>275.</p>
  </td>
<td>
  <p class=row>(..)</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>632 (use 506)</p>
  </td>
<td>
  <p class=row>002E 002E</p>
  </td>
<td>
  <p class=row>Bracketed double period</p>
  </td>
  <td>
  <p class=row>Medium-length pause</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>276.</p>
  </td>
<td>
  <p class=glyphgreen>(...)</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>633 (use 506)</p>
  </td>
<td>
  <p class=row>002E 002E 002E</p>
  </td>
<td>
  <p class=row>Bracketed triple period</p>
  </td>
  <td>
  <p class=row>Long pause</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>277.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>634</p>
  </td>
<td>
  <p class=row>1D191</p>
  </td>
<td>
  <p class=row>Forte</p>
  </td>
  <td>
  <p class=row>Loud speech</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>278.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>635</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Fortissimo</p>
  </td>
  <td>
  <p class=row>Louder speech</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>279.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>636</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Piano</p>
  </td>
  <td>
  <p class=row>Quiet speech</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>280.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>637</p>
  </td>
<td>
  <p class=row>1D18F</p>
  </td>
<td>
  <p class=row>Pianissimo</p>
  </td>
  <td>
  <p class=row>Quieter speech</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>281.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>638</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Allegro</p>
  </td>
  <td>
  <p class=row>Fast speech</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>282.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>639</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Lento</p>
  </td>
  <td>
  <p class=row>Slow speech</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>283.</p>
  </td>
<td>
  <p class=glyph>1</p>
  </td>
<td>
  <p class=key>1</p>
  </td>
<td>
  <p class=row>640</p>
  </td>
<td>
  <p class=row>0031</p>
  </td>
<td>
  <p class=row>Numeral one</p>
  </td>
  <td>
  <p class=row>Slight degree</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>284.</p>
  </td>
<td>
  <p class=glyph>2</p>
  </td>
<td>
  <p class=key>2</p>
  </td>
<td>
  <p class=row>641</p>
  </td>
<td>
  <p class=row>0032</p>
  </td>
<td>
  <p class=row>Numeral two</p>
  </td>
  <td>
  <p class=row>Moderate degree</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>285.</p>
  </td>
<td>
  <p class=glyph>3</p>
  </td>
<td>
  <p class=key>3</p>
  </td>
<td>
  <p class=row>642</p>
  </td>
<td>
  <p class=row>0033</p>
  </td>
<td>
  <p class=row>Numeral three</p>
  </td>
  <td>
  <p class=row>Extreme degree</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>286.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#838;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>651</p>
  </td>
<td>
  <p class=row>0346</p>
  </td>
<td>
  <p class=row>Superscript bridge</p>
  </td>
  <td>
  <p class=row>Dentolabial</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>287.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#845;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>652</p>
  </td>
<td>
  <p class=row>034D</p>
  </td>
<td>
  <p class=row>Subscript double arrow</p>
  </td>
  <td>
  <p class=row>Labial spreading</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>288.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#810;&#838;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>653</p>
  </td>
<td>
  <p class=row>032A 0346</p>
  </td>
<td>
  <p class=row>Superscript+subscript bridge</p>
  </td>
  <td>
  <p class=row>Bidental articulation</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>289.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#842;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>654</p>
  </td>
<td>
  <p class=row>034A</p>
  </td>
<td>
  <p class=row>Superscript slashed tilde</p>
  </td>
  <td>
  <p class=row>Denasal</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>290.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#843;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>655</p>
  </td>
<td>
  <p class=row>034B</p>
  </td>
<td>
  <p class=row>Superscript dotted tilde</p>
  </td>
  <td>
  <p class=row>Nasal escape</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>291.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#844;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>656</p>
  </td>
<td>
  <p class=row>034C</p>
  </td>
<td>
  <p class=row>Superscript double tilde</p>
  </td>
  <td>
  <p class=row>Velopharyngeal friction</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>292.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#840;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>657</p>
  </td>
<td>
  <p class=row>0348</p>
  </td>
<td>
  <p class=row>Subscript double syllabicity mark</p>
  </td>
  <td>
  <p class=row>Stronger articulation</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>293.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#841;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>658</p>
  </td>
<td>
  <p class=row>0349</p>
  </td>
<td>
  <p class=row>Subscript corner</p>
  </td>
  <td>
  <p class=row>Weaker articulation</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>294.</p>
  </td>
<td>
  <p class=glyphgreen>\</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>659</p>
  </td>
<td>
  <p class=row>005C</p>
  </td>
<td>
  <p class=row>Backslash</p>
  </td>
  <td>
  <p class=row>Reiterated articulation</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>295.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#846;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>660</p>
  </td>
<td>
  <p class=row>034E</p>
  </td>
<td>
  <p class=row>Subscript upward arrow-head</p>
  </td>
  <td>
  <p class=row>Whistled articulation</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>296.</p>
  </td>
<td>
  <p class=glyphgreen>&#8595;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>661</p>
  </td>
<td>
  <p class=row>2193</p>
  </td>
<td>
  <p class=row>Down full arrow</p>
  </td>
  <td>
  <p class=row>Ingressive air flow</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>297.</p>
  </td>
<td>
  <p class=glyphgreen>&#8593;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>662</p>
  </td>
<td>
  <p class=row>2191</p>
  </td>
<td>
  <p class=row>Up full arrow</p>
  </td>
  <td>
  <p class=row>Egressive air flow</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>298.</p>
  </td>
<td>
  <p class=glyphgreen>&#748;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>663 (use 403)</p>
  </td>
<td>
  <p class=row>02EC</p>
  </td>
<td>
  <p class=row>Left-sited subscript wedge</p>
  </td>
  <td>
  <p class=row>Pre-voicing</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>299.</p>
  </td>
<td>
  <p class=glyphgreen>&#748;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>664 (=403)</p>
  </td>
<td>
  <p class=row>02EC</p>
  </td>
<td>
  <p class=row>Right-sited subscript wedge</p>
  </td>
  <td>
  <p class=row>Post-voicing</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>300.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>665</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Bracketed subscript wedge</p>
  </td>
  <td>
  <p class=row>Partial voicing</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>301.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>666</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Left-bracketed subscript wedge</p>
  </td>
  <td>
  <p class=row>Initial partial voicing</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>302.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>667</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Right-bracketed subscript wedge</p>
  </td>
  <td>
  <p class=row>Final partial voicing</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>303.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>668</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Bracketed under-ring</p>
  </td>
  <td>
  <p class=row>Partial devoicing</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>304.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>669</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Left-bracketed under-ring</p>
  </td>
  <td>
  <p class=row>Initial partial devoicing</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>305.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>670</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Right-bracketed under-ring</p>
  </td>
  <td>
  <p class=row>Final partial devoicing</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>306.</p>
  </td>
<td>
  <p class=glyphgreen>&#451;&#451;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>672</p>
  </td>
<td>
  <p class=row>01C3 01C3</p>
  </td>
<td>
  <p class=row>Right-sited double exclamation point</p>
  </td>
  <td>
  <p class=row>Ventricular</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>307.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#866;&#9676;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>674</p>
  </td>
<td>
  <p class=row>0362</p>
  </td>
<td>
  <p class=row>Subscript right arrow</p>
  </td>
  <td>
  <p class=row>Slurred articulation</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>308.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#839;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>675</p>
  </td>
<td>
  <p class=row>0347</p>
  </td>
<td>
  <p class=row>Subscript equals sign</p>
  </td>
  <td>
  <p class=row>Alveolarized</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>309.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>677</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Superscript double-barred H</p>
  </td>
  <td>
  <p class=row>Faucalized</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>310.</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>678</p>
  </td>
<td>
  <p class=row>&nbsp;</p>
  </td>
<td>
  <p class=row>Superscript O-E ligature</p>
  </td>
  <td>
  <p class=row>Labialized: Open-rounded</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>311.</p>
  </td>
<td>
  <p class=glyphgreen>&#451;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>679</p>
  </td>
<td>
  <p class=row>01C3</p>
  </td>
<td>
  <p class=row>Right-sited exclamation point</p>
  </td>
  <td>
  <p class=row>Harsh</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>312.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#831;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>680</p>
  </td>
<td>
  <p class=row>033F</p>
  </td>
<td>
  <p class=row>Superscript equals sign</p>
  </td>
  <td>
  <p class=row>Unaspirated</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>313.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#852;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>681</p>
  </td>
<td>
  <p class=row>0354</p>
  </td>
<td>
  <p class=row>Subscript left pointer</p>
  </td>
  <td>
  <p class=row>Laterally offset to the right</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>314.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#853;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>682</p>
  </td>
<td>
  <p class=row>0355</p>
  </td>
<td>
  <p class=row>Subscript right pointer</p>
  </td>
  <td>
  <p class=row>Laterally offset to the left</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>315.</p>
  </td>
<td>
  <p class=glyphgreen>&#9676;&#816;</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>683 (=406)</p>
  </td>
<td>
  <p class=row>0330</p>
  </td>
<td>
  <p class=row>Right-sited subscript tilde</p>
  </td>
  <td>
  <p class=row>Creaky</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>316.</p>
  </td>
  <td>
  <p class=glyph>[</p>
  </td>
<td>
  <p class=key>[</p>
  </td>
  <td>
  <p class=row>901</p>
  </td>
  <td>
  <p class=row>005B</p>
  </td>
  <td>
  <p class=row>Left
  Square Bracket</p>
  </td>
  <td>
  <p class=row>begin
  phonetic transcription</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>317.</p>
  </td>
  <td>
  <p class=glyph>]</p>
  </td>
<td>
  <p class=key>]</p>
  </td>
  <td>
  <p class=row>902</p>
  </td>
  <td>
  <p class=row>005D</p>
  </td>
  <td>
  <p class=row>Right
  Square Bracket</p>
  </td>
  <td>
  <p class=row>end
  phonetic transcription</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>318.</p>
  </td>
  <td>
  <p class=glyph>/</p>
  </td>
<td>
  <p class=key>/</p>
  </td>
  <td>
  <p class=row>903</p>
  </td>
  <td>
  <p class=row>002F</p>
  </td>
  <td>
  <p class=row>Forward
  Slash</p>
  </td>
  <td>
  <p class=row>begin/end
  phonemic transcription</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>319.</p>
  </td>
  <td>
  <p class=glyph>(</p>
  </td>
<td>
  <p class=key>(</p>
  </td>
  <td>
  <p class=row>906</p>
  </td>
  <td>
  <p class=row>0028</p>
  </td>
  <td>
  <p class=row>Left
  parenthesis</p>
  </td>
  <td>
  <p class=row>indistinguishable
  utterance (begin)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>320.</p>
  </td>
  <td>
  <p class=glyph>)</p>
  </td>
<td>
  <p class=key>)</p>
  </td>
  <td>
  <p class=row>907</p>
  </td>
  <td>
  <p class=row>0029</p>
  </td>
  <td>
  <p class=row>Right
  parenthesis</p>
  </td>
  <td>
  <p class=row>indistinguishable
  utterance (end)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>321.</p>
  </td>
  <td>
  <p class=glyph>((</p>
  </td>
<td>
  <p class=key>((</p>
  </td>
  <td>
  <p class=row>908</p>
  </td>
  <td>
  <p class=row>0028
  0028</p>
  </td>
  <td>
  <p class=row>Left
  double parenthesis</p>
  </td>
  <td>
  <p class=row>Sound
  obscured (begin)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>322.</p>
  </td>
  <td>
  <p class=glyph>))</p>
  </td>
<td>
  <p class=key>))</p>
  </td>
  <td>
  <p class=row>909</p>
  </td>
  <td>
  <p class=row>0029
  0029</p>
  </td>
  <td>
  <p class=row>Right
  double parenthesis</p>
  </td>
  <td>
  <p class=row>Sound
  obscured (end)</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>323.</p>
  </td>
<td>
  <p class=glyphgreen>{</p>
  </td>
<td>
  <p class=glyph>&nbsp;</p>
  </td>
<td>
  <p class=row>910</p>
  </td>
<td>
  <p class=row>007B</p>
  </td>
<td>
  <p class=row>Left brace</p>
  </td>
  <td>
  <p class=row>Begin prosodic notation</p>
  </td>
 </tr>
 <tr>
  <td>
  <p>324.</p>
  </td>
<td>
  <p class=glyphgreen>}</p>
  </td>
<td>
  <p class=key>&nbsp;</p>
  </td>
<td>
  <p class=row>911</p>
  </td>
<td>
  <p class=row>007D</p>
  </td>
<td>
  <p class=row>Right brace</p>
  </td>
  <td>
  <p class=row>End prosodic notation</p>
  </td>
 </tr>
</table>

<p>&nbsp;</p>



<hr align=left size=1 width="33%">

<div id=ftn1>

<p class=MsoFootnoteText style='line-height:10.0pt'><a href="#_ftnref1" name="_ftn1" title=""><span class=MsoFootnoteReference><span class=MsoFootnoteReference>[1]</span></span></a> Use <span class=key>&amp;</span> for Left-stem level tones, e.g. <span class=key>&amp;0</span> becomes A712 (&#42770;).</p>

</div>

<div id=ftn2>

<p class=MsoFootnoteText style='line-height:10.0pt'><a href="#_ftnref2"
name="_ftn2" title=""><span class=MsoFootnoteReference><span class=MsoFootnoteReference>[2]</span></span></a> Glides to and from any level (e.g. <span class=key>#32</span> becomes &#742;&#743;) and any sequence of any two glides (e.g. <span class=key>#314</span> becomes &#742;&#744;&#741;).</p>

</div>

<div id=ftn3>

<p class=MsoFootnoteText style='margin-bottom:0in;margin-bottom:.0001pt;
line-height:10.0pt'><a href="#_ftnref3" name="_ftn3" title=""><span class=MsoFootnoteReference><span class=MsoFootnoteReference>[3]</span></span></a> The following characters can be superscripted: 0123456789 + - = ( ) &#661; &#660; b &#946; c &#597; d ð f &#632;
g &#609; &#611; h &#614;  j &#607; &#669;
k l &#621;  &#671; m &#625; n &#626; &#627;
&#331; &#628; p r &#633; &#635; &#641; s &#642; &#643; t &#952; v &#651; w &#624;
x &#613; z &#657; &#656; &#658; a &#592;  &#7426;
&#593; e &#601; &#604; &#603;   i &#618;
&#616; o &#594; &#596; &#629;  &#652;
u &#623; &#650; &#649; y</p>

</div>

<div id=ftn4>

<p class=MsoFootnoteText style='line-height:10.0pt'><a href="#_ftnref4"
name="_ftn4" title=""><span class=MsoFootnoteReference><span class=MsoFootnoteReference>[4]</span></span></a> Retroflex hooks may be added to:
a &#593; &#599; e
&#603; &#604; &#601; i &#596; &#643; u &#658; (&#7567; &#7568; &#7569; &#7570; &#7571;
&#7572; &#7573; &#7574; &#7575; &#7576; &#7577;  &#7578;)</p>

</div>

<div id=ftn5>

<p class=MsoFootnoteText style='line-height:10.0pt'><a href="#_ftnref5"
name="_ftn5" title=""><span class=MsoFootnoteReference><span class=MsoFootnoteReference>[5]</span></span></a> Palatal hooks may be added to: b
d f &#609; k l m n p r s &#643; v x z (&#7552; &#7553; &#7554; &#7555; &#7556; &#7557;
&#7558; &#7559; &#7560; &#7561; &#7562; &#7563; &#7564; &#7565; &#7566;)</p>

</div>

<div id=ftn6>

<p class=MsoFootnoteText><a href="#_ftnref6" name="_ftn6" title=""><span
class=MsoFootnoteReference><span
class=MsoFootnoteReference>[6]</span></span></a> Available for 
color:black'>&#7532;, &#7533;, &#7534;, &#619;, &#7535;, &#7536;, &#7537;, &#7538;,
&#7539;, &#7540;, &#7541; and &#7542;. </p>

</div>

<div id=ftn7>

<p class=MsoFootnoteText style='margin-bottom:0in;margin-bottom:.0001pt;
line-height:9.5pt'><a href="#_ftnref7" name="_ftn7" title=""><span class=MsoFootnoteReference><span class=MsoFootnoteReference>[7]</span></span></a> Typed between the characters. Thus <span class=key>k#&amp;p</span>.</p>

</div>

<div id=ftn8>

<p class=MsoFootnoteText style='margin-bottom:0in;margin-bottom:.0001pt; line-height:9.5pt'><a href="#_ftnref8" name="_ftn8" title=""><span class=MsoFootnoteReference><span class=MsoFootnoteReference>[8]</span></span></a> Typed between the characters. Thus <span class=key>t@&amp;s</span>.</p>

</div>
