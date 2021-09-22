<html>

<head>
    <meta charset="utf-8">
    <title>提案要求 | システム環境・エコロジー要件</title>
    <link rel="stylesheet" href="css/style.css"
</head>

<body>
    <div class="menu">
        <h2>システム環境・エコロジー要件</h2>
    以下のガイドラインに沿って回答お願いいたします。
        <ul>
            <li>FC：完全に適合</li>
            <li>PC：条件付きで適合（対応予定あり、など）</li>
            <li>NC：非適合</li>
            <li>NA：該当せず</li>
        </ul>
    </div>

    <form action="write.php" method="post">

    <h3>Q001 [MUST] 導入する機器は、19インチラックにマウントが可能であること、ラックマウント不可の場合は、ベルト等別方法で固定の事</h3>
    <p>
    <input type="radio" name="Q001" value="fc" checked="checked">FC
    <input type="radio" name="Q001" value="pc">PC
    <input type="radio" name="Q001" value="nc">NC
    <input type="radio" name="Q001" value="na">NA
    </p>
    <p>
    コメント: <textarea name="C001" cols="50" rows="5"></textarea>
    </p>

    <h3>Q002 [MUST] 導入する機器のポートは、10/100/1000BASE-Tに対応していること、必要に応じて10G SFP光にも対応すること</h3>

    <p>
    <input type="radio" name="Q002" value="fc" checked="checked">FC
    <input type="radio" name="Q002" value="pc">PC
    <input type="radio" name="Q002" value="nc">NC
    <input type="radio" name="Q002" value="na">NA
    </p>
    <>
    コメント: <textarea name="C002" cols="50" rows="5"></textarea>
    </p>

    <h3>Q003 [MUST] 導入する機器は、拠点内のLAN機器とTrunk接続（タグVLAN／802.1q）に対応していること</h3>

    <p>
    <input type="radio" name="Q003" value="fc" checked="checked">FC
    <input type="radio" name="Q003" value="pc">PC
    <input type="radio" name="Q003" value="nc">NC
    <input type="radio" name="Q003" value="na">NA
    </p>
    <p>
    コメント: <textarea name="C003" cols="50" rows="5"></textarea>
    </p>

    <h3>Q004 [WANT] 静音機器での構成も検討すること(50db)</h3>

    <p>
    <input type="radio" name="Q004" value="fc" checked="checked">FC
    <input type="radio" name="Q004" value="pc">PC
    <input type="radio" name="Q004" value="nc">NC
    <input type="radio" name="Q004" value="na">NA
    </p>
    <p>
    コメント: <textarea name="C004" cols="50" rows="5"></textarea>
    </p>

    <h3>Q005 [MUST] 機器全般は、100V前提で選定すること、ただし本社などデータセンター導入機器は200Vでも可能</h3>

    <p>
    <input type="radio" name="Q005" value="fc" checked="checked">FC
    <input type="radio" name="Q005" value="pc">PC
    <input type="radio" name="Q005" value="nc">NC
    <input type="radio" name="Q005" value="na">NA
    </p>
    <p>
    コメント: <textarea name="C005" cols="50" rows="5"></textarea>
    </p>

    <h3>Q006 [MUST] 本番環境に影響を与える作業は非稼働日に実施すること、また翌営業日には立会いを行うこと</h3>

    <p>
    <input type="radio" name="Q006" value="fc" checked="checked">FC
    <input type="radio" name="Q006" value="pc">PC
    <input type="radio" name="Q006" value="nc">NC
    <input type="radio" name="Q006" value="na">NA
    </p>
    <p>
    コメント: <textarea name="C006" cols="50" rows="5"></textarea>
    </p>

    <h3>Q007 [WANT] 機器設置は非稼働日を前提にスケジュールすること</h3>

    <p>
    <input type="radio" name="Q007" value="fc" checked="checked">FC
    <input type="radio" name="Q007" value="pc">PC
    <input type="radio" name="Q007" value="nc">NC
    <input type="radio" name="Q007" value="na">NA
    </p>
    <p>
    コメント: <textarea name="C007" cols="50" rows="5"></textarea>
    </p>


    <input type="submit" value="送信">
    </form>
</body>

</html>
