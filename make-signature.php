<?php

// Fetching the data from the online form
$givenName = filter_input(INPUT_POST, 'givenName', FILTER_SANITIZE_SPECIAL_CHARS);
$familyName = filter_input(INPUT_POST, 'familyName', FILTER_SANITIZE_SPECIAL_CHARS);
$jobTitle = filter_input(INPUT_POST, 'jobTitle', FILTER_SANITIZE_SPECIAL_CHARS);
$telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_SPECIAL_CHARS);
$faxNumber = filter_input(INPUT_POST, 'faxNumber', FILTER_SANITIZE_SPECIAL_CHARS);
$logos = $_POST['logos'];

// Conditional fields
$f_jobTitle = ($jobTitle) ? '<span itemprop="jobTitle">' . $jobTitle . '</span><br />' : '';
$f_telephone = ($telephone) ? '<strong>Tél. :</strong> <span itemprop="telephone">' . $telephone . '</span><br />' : '';
$f_faxNumber = ($faxNumber) ? '<strong>Fax :</strong> <span itemprop="fax">' . $faxNumber . '</span><br />' : '';
$f_logo_uparis = ($logos['uparis']) ? '
    <a href="https://www.u-paris.fr/" style="display:inline-block;vertical-align:middle;">
        <img src="http://www.llf.cnrs.fr/sites/llf.cnrs.fr/files/intranet/logos/uparis-web.png" height="70" alt="Logo de l’université de Paris" />
    </a>' : '';
$f_logo_llf = ($logos['llf']) ? '
    <a href="http://www.llf.cnrs.fr" style="display:inline-block;vertical-align:middle;">
        <object data="http://www.llf.cnrs.fr/sites/llf.cnrs.fr/files/intranet/logos/v2-vectoriel-fond-blanc.svg" type="image/svg+xml" height="55" style="pointer-events: none;">
            <img src="http://www.llf.cnrs.fr/sites/llf.cnrs.fr/files/intranet/logos/web-1024-transparent.png" height="55" alt="Logo du Laboratoire de linguistique formelle" />
        </object>
    </a>' : '';
$f_logo_cnrs = ($logos['cnrs']) ? '
    <a href="http://www.cnrs.fr" style="display:inline-block;vertical-align:middle;margin-left:1em;">
        <img src="http://www.llf.cnrs.fr/sites/llf.cnrs.fr/files/intranet/logos/cnrs_rvb.png" height="60" alt="Logo du Centre national de la recherche scientifique" />
    </a>' : '';

// HTML template
$template = '<div style="font-size:11pt;font-family:\'Lucida Sans Unicode\', \'Lucida Grande\', sans-serif;margin:0 0 .5em;line-height:1.3em;" itemscope itemtype="http://schema.org/Person">
    <strong itemprop="givenName">' . $givenName . '</strong>
    <strong itemprop="familyName">' . $familyName . '</strong>
    <br />
    <span itemprop="worksFor">Laboratoire de linguistique formelle</span>
    <br />
    ' . $f_jobTitle . '
    <span itemprop="affiliation">Université de Paris</span>,
    <span itemprop="affiliation">LLF</span>,
    <span itemprop="affiliation">CNRS</span>
    <br />
    <a href="http://www.llf.cnrs.fr" itemprop="url">http://www.llf.cnrs.fr</a>
    <br />
    ' . $f_telephone . '
    ' . $f_faxNumber . '
    ' . $f_logo_uparis . '
    ' . $f_logo_llf . '
    ' . $f_logo_cnrs . '
</div>';

// Download the signature file
header('Content-Type: text/html');
header('Content-Disposition: attachment; filename="signature.html"');
print($template);

?>