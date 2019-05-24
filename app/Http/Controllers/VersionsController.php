<?php

namespace App\Http\Controllers;
use DB;
use Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class VersionsController extends Controller
{
    public function versions() {
        // dd('here');
        $versions = [
            12 => "American Standard Version (ASV)",
            8 => "Amplified Bible, Classic Edition (AMPC)",
            42 => "Catholic Public Domain Version (CPDV)",
            1713 => "Christian Standard Bible (CSB)",
            37 => "Common English Bible (CEB)",
            1275 => "Complete Jewish Bible (CJB)",
            294 => "Contemporary English Version (Anglicised) 2012 (CEVUK)",
            392 => "Contemporary English Version (CEV)",
            303 => "Contemporary English Version (CEVDC)",
            478 => "Darby's Translation 1890 (DARBY)",
            55 => "Douay-Rheims Challoner Revision 1752 (DRC1752)",
            2079 => "EasyEnglish Bible 2018 (EASY)",
            59 => "English Standard Version (ESV)",
            1932 => "Free Bible Version New Testament with Psalms (FBVNTPSALMS)",
            70 => "GOD'S WORD Translation (GW)",
            416 => "Good News Bible (Anglicised) (GNBDC)",
            431 => "Good News Bible (Catholic edition in Septuagint order) (GNBDK)",
            296 => "Good News Bible (GNB)",
            68 => "Good News Translation (GNT)",
            69 => "Good News Translation (US Version) (GNTD)",
            72 => "Holman Christian Standard Bible (HCSB)",
            406 => "Holy Bible: Easy-to-Read Version (ERV)",
            1359 => "International Children’s Bible (ICB)",
            1077 => "Jubilee Bible (JUB)",
            1 => "King James Version (KJV)",
            547 => "King James Version with Apocrypha, American Edition (KJVA)",
            90 => "Lexham English Bible (LEB)",
            1365 => "Metrical Psalms 1650 (MP1650)",
            1171 => "Modern English Version (MEV)",
            463 => "New American Bible, revised edition (NABRE)",
            100 => "New American Standard Bible (NASB)",
            105 => "New Century Version (NCV)",
            107 => "New English Translation (NET)",
            113 => "New International Version (Anglicised) (NIVUK)",
            114 => "New King James Version (NKJV)",
            116 => "New Living Translation (NLT)",
            2135 => "New Messianic Version Bible (NMV)",
            2016 => "New Revised Standard Version (NRSV)",
            130 => "Orthodox Jewish Bible (OJB)",
            2020 => "Revised Standard Version (RSV)",
            477 => "Revised Version 1885 (RV1885)",
            1922 => "Revised Version with Apocrypha 1895 (RV1895)",
            1047 => "St Paul from the Trenches 1916 (GWC)",
            1588 => "The Amplified Bible (AMP)",
            31 => "The Books of the Bible NT (BOOKS)",
            97 => "The Message (MSG)",
            1849 => "The Passion Translation (TPT)",
            316 => "The Scriptures 2009 (TS2009)",
            314 => "Tree of Life Version (TLV)",
            206 => "World English Bible (WEB)",
            1204 => "World English Bible British Edition (WEBBE)",
            1209 => "World Messianic Bible (WMB)",
            1207 => "World Messianic Bible British Edition (WMBBE)",
            821 => "Young's Literal Translation 3rd Revision 1898 (YLT1898)",
        ];
        return view('versions', [
            'versions' => $versions,
            'bookId' => 1
        ]);
    }
}