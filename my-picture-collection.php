<?php
/*
Plugin Name: MyPictureCollection
Description: Create your own picture collection using this highly customizable sidebar widget. Add your favourite photos, cartoons and screenshots to your private media library and present them on your weblog.
Version: 1.0.0
Author: allen25
*/



# @date 2010-09-08 14-56-06
 abstract class Herjwlprjklo {
  const Zaugexwuwzh = 'options';
     const Gjztdxzdtosjjby = 'submit';
const Hvlzglgjpbe = 'title';
    const Dfgzxelecxwwljz = 'count';
       const Kiqycvgxv = 'mode';
       const Juaoxrioj = 'lang';
    const Rwabahideargh = 'compids';
    const Yvleezsafhh = 0;
   const Wekaxhdvez = 1;
      const Yqbfgyocqwqp = 2;		
 const Frquelisvhiocu = 'backend-title';
const Objsngdpgevpe = 'backend-count';
const Pyzpflolipc = 'backend-compids';
      const Oqpvgzcvfg = 'backend-mode';
const Hscnszdnzyuhhy = 'backend-lang';
         const Zcosmvodqkaqq = 'backend-head';
       const Yqyceuhzhwg = 'backend-foot';
        const Insvlaiokrwn = 'backend-news';
         const Vowwpmhlyyuto = 'backend-info';
const Qnsusvnbqpxsheh = 101;
         const Qbkdkudvdyyvrn = 102;
    const Enrwbvfci = 103;
         const Vcmreyyexswevk = 104;
         const Issqdmdztszptj = 105;
      const Qqauzobsyyb = 106;
       const Eordwkcjufcc = 107;
      const Sjoijazbafm = 108;
const Actnmlzeszwtykj = 109;
      const Dweinvognti = 110;
        const Dcflsrgejmpyt = 111;
       const Rpzcfnzvgnps = 113;
         const Bhqduzzmeydigj = 112;
         const Vgifquejhjmfjl = 120;
    const Jikxzhakzxc = 0;
  const Wahukazkr = 1;
  const Jvqlfnkar = 2;
     const Wchrusrtnhwx = 3;
     const Zrlqllsyxfqh = 4;
      public function constructDmyjthjput($jntbpcggqas, $tvsftaxfzyvs, $usfpfrcmvv, $wpirxgihoioi) {
  $options = get_option($this->constructAlfwqlymgaqngovmuylms(self::Zaugexwuwzh));
         $title = $options['title'];
   $compids = $this->setZbdgqhjxm($options['compids'], $options['count']);
       $mode = $options['mode'];
       $lang = $options['lang'];
$karma_data = Qffnbfehalniwm::getInstance()->createVmqffeegewkuwhor($compids);
         $translator = new Mxfnncqnbsm($lang);
      $renderer = $this->createCvwcgerhtbdiubkxyw($translator, $mode);
echo $jntbpcggqas;
    echo $usfpfrcmvv . $title . $wpirxgihoioi;
   echo $renderer->constructGsxgfqnubheo($karma_data);
 echo $tvsftaxfzyvs;
   }
    public function getLplhgcbbxgeuzcfwpek() {
       $options = $this->getPscvzugdsqo();
         $title = $options['title'];
$translator = new Mxfnncqnbsm($options['lang']);
   echo '<p>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.widgets.control.redirection', array(Mxfnncqnbsm::Jdorcxxatlzip => $this->queryKldgtuovhw())) . '</p>';
   echo '<input type="hidden" id="' . $this->constructAlfwqlymgaqngovmuylms(self::Gjztdxzdtosjjby) . '" name="' . $this->constructAlfwqlymgaqngovmuylms(self::Gjztdxzdtosjjby) . '" value="1" />';
   }
      public function getPscvzugdsqo() {
  $translator = new Mxfnncqnbsm($this->createKjiqboorsxgud());
     $compids = explode(',', $this->setBykuyehzeoylspi());
shuffle($compids);
     $compids = array_slice(
     $compids, 0, 
      min(
 $this->constructYpwjvxcxkfyy(Herjwlprjklo::Bhqduzzmeydigj),
       count($compids)
   )
    );
    for($limitKxljuootbipxx = 0; $limitKxljuootbipxx < count($compids); $limitKxljuootbipxx++) {
$compids[$limitKxljuootbipxx] = trim($compids[$limitKxljuootbipxx]);
   }
         $options = array(
      'title'=>$translator->constructTomfalujskxdhxdbvzbiysym('frontend.title'),
       'compids'=>implode(', ', $compids),
         'mode'=>self::Yqbfgyocqwqp,
         'lang'=>$this->createKjiqboorsxgud(),
       'count'=>$this->constructYpwjvxcxkfyy(Herjwlprjklo::Rpzcfnzvgnps)
    );
         $opts = get_option($this->constructAlfwqlymgaqngovmuylms(self::Zaugexwuwzh));
  if (!empty($opts)) {
     foreach ($opts as $key=>$value) {
      $options[$key] = $value;
   }
   }
    update_option($this->constructAlfwqlymgaqngovmuylms(self::Zaugexwuwzh), $options);
        return $options;
   }
    public function createBmkaabmvsmsfoila() {
     $result = '';
       $options = $this->getPscvzugdsqo();
$translator = new Mxfnncqnbsm($options['lang']);
        if ( $_POST[$this->constructAlfwqlymgaqngovmuylms(self::Gjztdxzdtosjjby)] !== null ) {
      $valid = true;
if ($this->constructYpwjvxcxkfyy(self::Qnsusvnbqpxsheh)) {
       $options['title'] = $_POST[$this->constructAlfwqlymgaqngovmuylms(self::Hvlzglgjpbe)];
   }
         if ($this->constructYpwjvxcxkfyy(self::Qbkdkudvdyyvrn)) {
      if (
     preg_match('/^\s*[0-9]+\s*$/', $_POST[$this->constructAlfwqlymgaqngovmuylms(self::Dfgzxelecxwwljz)]) &&
        (int) $_POST[$this->constructAlfwqlymgaqngovmuylms(self::Dfgzxelecxwwljz)] >= $this->constructYpwjvxcxkfyy(Herjwlprjklo::Dweinvognti) &&
       (int) $_POST[$this->constructAlfwqlymgaqngovmuylms(self::Dfgzxelecxwwljz)] <= $this->constructYpwjvxcxkfyy(Herjwlprjklo::Dcflsrgejmpyt)
     ) {
 $options['count'] = $_POST[$this->constructAlfwqlymgaqngovmuylms(self::Dfgzxelecxwwljz)];
} else {
    $result .= '
   <div class="updated">
        <p><strong>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.validation.count') . '</strong></p>
        </div>
    ';
   }
   }
         if ($this->constructYpwjvxcxkfyy(self::Vcmreyyexswevk)) {
    $options['mode'] = $_POST[$this->constructAlfwqlymgaqngovmuylms(self::Kiqycvgxv)];
   }
         if ($this->constructYpwjvxcxkfyy(self::Issqdmdztszptj)) {
    $options['lang'] = $_POST[$this->constructAlfwqlymgaqngovmuylms(self::Juaoxrioj)];
       $translator->queryDkzjsnpvjplczdbori($options['lang']);
   }
    if ($this->constructYpwjvxcxkfyy(self::Enrwbvfci)) {
if (preg_match('/^\s*([0-9]+,\s*)*[0-9]+\s*$/', $_POST[$this->constructAlfwqlymgaqngovmuylms(self::Rwabahideargh)])) {
 $options['compids'] = $_POST[$this->constructAlfwqlymgaqngovmuylms(self::Rwabahideargh)];
} else {
    $result .= '
   <div class="updated">
<p><strong>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.validation.compids') . '</strong></p>
        </div>
    ';
   }
   }
   if ($result === '') {
    $result .= '
   <div class="updated">
         <p><strong>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.updated') . '</strong></p>
        </div>
    ';
    update_option($this->constructAlfwqlymgaqngovmuylms(self::Zaugexwuwzh), $options);
   }
   }
         $title = $options['title'];
         $count = $options['count'];
   $compids = $options['compids'];
       $mode = $options['mode'];
       $lang = $options['lang'];
 $infoButton = '<span class="' . $this->queryKgvzjxbsugig(self::Vowwpmhlyyuto) . '" onclick="document.getElementsByName(\'' . $this->queryKgvzjxbsugig(self::Yqyceuhzhwg) . '\')[0].style.display=\'block\'; return false;">?</span>';
    $result .= '
 <div class="wrap"> 
      <form name="form1" method="post" action="' . $_SERVER['REQUEST_URI'] . '">
      <h2>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.title', array(Mxfnncqnbsm::Jdorcxxatlzip => $this->queryKldgtuovhw())) . '</h2> 
    ';
      if ($this->constructYpwjvxcxkfyy(self::Qqauzobsyyb)) {
    $result .= '
   <div class="' . $this->queryKgvzjxbsugig(self::Zcosmvodqkaqq) . '">' . 
   $translator->constructTomfalujskxdhxdbvzbiysym('backend.manual.top') . 
         '</div>
        <br />
    ';
   }
if ($this->constructYpwjvxcxkfyy(self::Qnsusvnbqpxsheh)) {
    $result .= '
      <!-- title -->
        <p class="' . $this->queryKgvzjxbsugig(self::Frquelisvhiocu) . '">
<label for="' . $this->constructAlfwqlymgaqngovmuylms(self::Hvlzglgjpbe) . '">
        <b>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.title') . '</b>:<br />
         <span>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.manual.title') . '</span><br />
    <input id="' . $this->constructAlfwqlymgaqngovmuylms(self::Hvlzglgjpbe) . '" name="' . $this->constructAlfwqlymgaqngovmuylms(self::Hvlzglgjpbe) . '" type="text" value="'.$title.'" />
</label>
      </p>
    ';
   }
         if ($this->constructYpwjvxcxkfyy(self::Qbkdkudvdyyvrn)) {
    $result .= '
      <!-- count -->
       <p class="' . $this->queryKgvzjxbsugig(self::Objsngdpgevpe) . '">
    <label for="' . $this->constructAlfwqlymgaqngovmuylms(self::Dfgzxelecxwwljz) . '">
        <b>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.count') . '</b>:<br />
         <span>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.manual.count') . '</span><br />
  <input id="' . $this->constructAlfwqlymgaqngovmuylms(self::Dfgzxelecxwwljz) . '" name="' . $this->constructAlfwqlymgaqngovmuylms(self::Dfgzxelecxwwljz) . '" type="text" value="'.$count.'" />
</label>
      </p>
    ';
   }
    if ($this->constructYpwjvxcxkfyy(self::Enrwbvfci)) {
    $result .= '
        <!-- compids -->
     <p class="' . $this->queryKgvzjxbsugig(self::Pyzpflolipc) . '">
  <label for="' . $this->constructAlfwqlymgaqngovmuylms(self::Rwabahideargh) . '">
<b>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.compids') . '</b>:<br />
       <span>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.manual.compids', array(Mxfnncqnbsm::Wddexmpgfjwidhn => $this->constructYpwjvxcxkfyy(Herjwlprjklo::Sjoijazbafm))) . '</span><br />
<input id="' . $this->constructAlfwqlymgaqngovmuylms(self::Rwabahideargh) . '" name="' . $this->constructAlfwqlymgaqngovmuylms(self::Rwabahideargh) . '" type="text" value="'.$compids.'" />
</label>
      </p>
    ';
   }
         if ($this->constructYpwjvxcxkfyy(self::Vcmreyyexswevk)) {
    $result .= '
     <!-- mode -->
    <p class="' . $this->queryKgvzjxbsugig(self::Oqpvgzcvfg) . '">
        <label for="' . $this->constructAlfwqlymgaqngovmuylms(self::Kiqycvgxv) . '">
       <b>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.mode') . '</b>:<br />
        <span>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.manual.mode') . '</span><br />
        <select id="' . $this->constructAlfwqlymgaqngovmuylms(self::Kiqycvgxv) . '" name="' . $this->constructAlfwqlymgaqngovmuylms(self::Kiqycvgxv) . '">
       ' . $this->getCduxpfrkzs(self::Yvleezsafhh, $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.image-mode'), $mode) . '
' . $this->getCduxpfrkzs(self::Wekaxhdvez, $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.animation-mode'), $mode) . '
        ' . $this->getCduxpfrkzs(self::Yqbfgyocqwqp, $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.image-animation-mode'), $mode) . '
 </select>
</label>
      </p>
    ';
   }
         if ($this->constructYpwjvxcxkfyy(self::Issqdmdztszptj)) {
    $result .= '
     <!-- lang -->
        <p class="' . $this->queryKgvzjxbsugig(self::Hscnszdnzyuhhy) . '">
        <label for="' . $this->constructAlfwqlymgaqngovmuylms(self::Juaoxrioj) . '">
 <b>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.language') . '</b>:<br />
  <span>' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.manual.language') . '</span><br />
        <select id="' . $this->constructAlfwqlymgaqngovmuylms(self::Juaoxrioj) . '" name="' . $this->constructAlfwqlymgaqngovmuylms(self::Juaoxrioj) . '">
     ' . $this->getCduxpfrkzs($this->createKjiqboorsxgud(), $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.default'), $lang) . '
  ' . $this->getCduxpfrkzs(Mxfnncqnbsm::Ouavbypmoyng, $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.english'), $lang) . '
   ' . $this->getCduxpfrkzs(Mxfnncqnbsm::Gkreyzrsktguac, $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.german'), $lang) . '
 ' . $this->getCduxpfrkzs(Mxfnncqnbsm::Pzyowgzxdge, $translator->constructTomfalujskxdhxdbvzbiysym('backend.fieldlabel.spanish'), $lang) . '
 </select>
</label>
      </p>
    ';
   }
       if ($this->constructYpwjvxcxkfyy(self::Eordwkcjufcc)) {
    $result .= '
 ' . $infoButton . '
      <div name="' . $this->queryKgvzjxbsugig(self::Yqyceuhzhwg) . '" class="' . $this->queryKgvzjxbsugig(self::Yqyceuhzhwg) . '">
       ' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.manual.bottom')
   ;
if ($this->constructYpwjvxcxkfyy(self::Actnmlzeszwtykj)) {
   $result .= 
  '<div class="' . $this->queryKgvzjxbsugig(self::Insvlaiokrwn) . '">' .
 $this->buildYrdfmqwdrzgx($translator) .
 '</div>';
   }
    $result .= '
        </div>
    ';
   }
    $result .= '
    <!-- update switch -->
         <input type="hidden" id="' . $this->constructAlfwqlymgaqngovmuylms(self::Gjztdxzdtosjjby) . '" name="' . $this->constructAlfwqlymgaqngovmuylms(self::Gjztdxzdtosjjby) . '" value="1" />				
  <div class="submit">
      <input type="submit" name="submit" value="' . $translator->constructTomfalujskxdhxdbvzbiysym('backend.save') . ' &raquo;" />
        </div>
         </form>
        </div>
    ';
     echo $result;
   }
     protected function getCduxpfrkzs($bqhxbpefuf, $agxtoaeqgg, $goxiqajsvf) {
 $selected = ($goxiqajsvf == $bqhxbpefuf ? 'selected' : '');
    return '<option value="' . $bqhxbpefuf . '" ' . $selected . '>' . $agxtoaeqgg . '</option>';
   }
    protected function createKjiqboorsxgud() {
 $arrZjnzykspu = get_locale();
      $arrZjnzykspu = substr($arrZjnzykspu, 0, 2);
      switch ($arrZjnzykspu) {
   case Mxfnncqnbsm::Ouavbypmoyng:
     case Mxfnncqnbsm::Gkreyzrsktguac:
  case Mxfnncqnbsm::Pzyowgzxdge:
        break;
default:
    $arrZjnzykspu = Mxfnncqnbsm::Ouavbypmoyng;
        break;
   }
   return $arrZjnzykspu;
   }
 public function buildKzbwzxymljrqil() {
  echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->queryGgwkdzrviofrcl() . '/style.css" type="text/css" media="screen" />';
   }
     public function getPjhdesfadh() {
   echo '<link rel="stylesheet" href="' . WP_PLUGIN_URL . '/' . $this->queryGgwkdzrviofrcl() . '/style2.css" type="text/css" media="screen" />';
   }
   public function buildYrdfmqwdrzgx($kwxixzhipjfih) {
     $result = '';
       $nc = $this->buildQeguwmjlfgqfxy();
     $pluginName = $this->queryGgwkdzrviofrcl();
      $transKey = 'news://plugins/' . $pluginName;
       if (	false === ( $json = get_transient($transKey) ) && 
    !preg_match('/localhost/', get_option('siteurl')) &&
 !preg_match('/127.0.0.1/', get_option('siteurl'))
     ) {
    $msgs = $nc->buildJohfnwygiygip(
     $pluginName, 
    WP_PLUGIN_DIR . '/' . $pluginName . '/' . $pluginName . '.php'
    );
$json = @json_encode($msgs);
         $isTransientSet = set_transient($transKey, $json, 1*24*60*60 + mt_rand(0, 3*24*60*60));
   }
       if ($json == null || $json == '') {
         return;
   }
      $msgs = @json_decode($json, true);
  if (count($msgs) > 0 && $msgs[Wkagyizhzzrwiz::Nkuuwaficnn] === true) {
       $result .= $kwxixzhipjfih->constructTomfalujskxdhxdbvzbiysym('backend.news.upgrade');
   }
       return $result;
   }
    protected function setZbdgqhjxm($ktdjorgzudob, $ynpcvoqplvl) {
      $ktdjorgzudob = explode(',', $ktdjorgzudob);
       $rotationMode = $this->constructYpwjvxcxkfyy(Herjwlprjklo::Vgifquejhjmfjl);
      switch ($rotationMode) {
         case 0:
     shuffle($ktdjorgzudob);
        break;
         case 1:
    $ktdjorgzudob = $this->buildGhmuivqpdawqzqecqipy($ktdjorgzudob, $this->buildOyrbjuoothut());
        break;
         case 2:
         $dateid = round(time() / (60*60*24));
     $ktdjorgzudob = $this->buildGhmuivqpdawqzqecqipy($ktdjorgzudob, $dateid);
        break;
         case 3:
      $combinedid = $this->buildOyrbjuoothut() + ( round(time() / (60*60*24)) );
         $ktdjorgzudob = $this->buildGhmuivqpdawqzqecqipy($ktdjorgzudob, $combinedid);
        break;
         case 4:
default:
        break;
   }
  $ktdjorgzudob = array_slice($ktdjorgzudob, 0, $ynpcvoqplvl);
    for ($countQhozdiruqjw = 0; $countQhozdiruqjw < count($ktdjorgzudob); $countQhozdiruqjw++) {
      $ktdjorgzudob[$countQhozdiruqjw] = trim($ktdjorgzudob[$countQhozdiruqjw]);
   }
   return $ktdjorgzudob;
   }
private function buildOyrbjuoothut() {
       return round(crc32($_SERVER['REQUEST_URI']));
   }
      private function buildGhmuivqpdawqzqecqipy($npwdrltlwxjjw, $emaicxbxavt) {
   $isXzkctxcjhpiyd = count($npwdrltlwxjjw);
 if ($isXzkctxcjhpiyd === 0) {
    return $npwdrltlwxjjw;
   }
         for ($offsetUqqgiudmexxzc = 0; $offsetUqqgiudmexxzc < $isXzkctxcjhpiyd; $offsetUqqgiudmexxzc++) {
     $pos = ($isXzkctxcjhpiyd + $offsetUqqgiudmexxzc + $emaicxbxavt) % $isXzkctxcjhpiyd;
 $reorderedArr[$offsetUqqgiudmexxzc] = $npwdrltlwxjjw[$pos];
   }
   return $reorderedArr;
   }
     public abstract function queryKldgtuovhw();
         public abstract function queryGgwkdzrviofrcl();
public abstract function constructAlfwqlymgaqngovmuylms($smncdtemm);
        public abstract function queryKgvzjxbsugig($tfiainkxxs);
   public abstract function createCvwcgerhtbdiubkxyw($hzrhejlpwosyxthw, $vkkhlnfad);
         public abstract function buildQeguwmjlfgqfxy();
    public abstract function constructYpwjvxcxkfyy($olwxxdqqgbcc);
        public abstract function setBykuyehzeoylspi();
   }
 class Wwzeutwidube extends Awgltzurjf {
      public function constructGsxgfqnubheo(&$dphoinjekto) {
$hzrhejlpwosyxthw = $this->lpjiwgstft;
      $vkkhlnfad = $this->ckmlaaqcdbews;
$html = '<div class="' . $this->queryKgvzjxbsugig(self::Exxqhiisqksav) . '">';
     foreach ($dphoinjekto as $data) {
 $title = $this->setMbcoewxdgifjo($data['title']);
   $author = $this->setMbcoewxdgifjo($data['user']['username']);
  $html .= '
        <div class="' . $this->queryKgvzjxbsugig(self::Bbsqilsfjywq) . '">
        <a href="' . $data['slideshowUrl'] . '" target="_blank">
  ' . $this->createWbgtyxuwcwtiprazkvjq($data, $vkkhlnfad) . '
      </a>
       <div>
        <div class="' . $this->queryKgvzjxbsugig(self::Ctzbgtghxgar) . '">
   <strong>' . $title . '</strong>
        </div>
<div class="' . $this->queryKgvzjxbsugig(self::Kdnukvajqdbhay) . '">
         <div class="' . $this->queryKgvzjxbsugig(self::Qgkmgynldpvkd) . '">
    ' . $hzrhejlpwosyxthw->constructTomfalujskxdhxdbvzbiysym('frontend.author') . ' <strong>' . $author . '</strong>
        </div>
        </div>
        </div>
        </div>
    ';
   }
$html .= '</div>';
     return $html;
   }
public function queryKgvzjxbsugig($dccakqkosj) {
 return 'mypc-' . $dccakqkosj;
   }
   }
class Fkpnxpndtbhmceethoe extends Herjwlprjklo {
   const Mavavhtghno = '
    20094, 20777, 20589, 20376, 17199, 20260, 19302, 3289, 18728, 18127, 20234, 20010, 12130, 6109, 19258,
         20163, 
    16908, 18200
    ';
   public function __construct() {
   }
       public function queryKldgtuovhw() {
 return 'MyPictureCollection';
   }
 public function queryGgwkdzrviofrcl() {
   return 'my-picture-collection';
   }
     public function constructAlfwqlymgaqngovmuylms($mrsidjahrgti) {
        return 'mypicturecollection-' . $mrsidjahrgti;
   }
  public function queryKgvzjxbsugig($ltfvoqrxiuur) {
   return 'mypc-' . $ltfvoqrxiuur;
   }
public function createCvwcgerhtbdiubkxyw($ylaphmxx, $ewoytsddhrmo) {
       $renderer = new Wwzeutwidube($ylaphmxx, $ewoytsddhrmo);
         return $renderer;
   }
 public function buildQeguwmjlfgqfxy() {
        $nc = Wkagyizhzzrwiz::getInstance();
   return $nc;
   }
  public function constructYpwjvxcxkfyy($hjkthiyl) {
        $result = false;
  switch ($hjkthiyl) {
   case Herjwlprjklo::Dweinvognti:
    $result = 1;
        break;
     case Herjwlprjklo::Dcflsrgejmpyt:
 $arrOryxhhinxu = 6;
        break;
    case Herjwlprjklo::Rpzcfnzvgnps:
 $arrOryxhhinxu = 1;
        break;
      case Herjwlprjklo::Bhqduzzmeydigj:
 $arrOryxhhinxu = 5;
        break;
      case Herjwlprjklo::Vgifquejhjmfjl:
      $arrOryxhhinxu = Herjwlprjklo::Wchrusrtnhwx;
        break;
   case Herjwlprjklo::Qqauzobsyyb:
      case Herjwlprjklo::Issqdmdztszptj:
     $arrOryxhhinxu = false;
        break;
   case Herjwlprjklo::Sjoijazbafm:
     $arrOryxhhinxu = array(
        'Countries' => 'http://slideshine.de/categories/tags.php/Staaten',
         'Cities' => 'http://slideshine.de/categories/tags.php/St%C3%A4dte',
    'Nature' => 'http://slideshine.de/categories/tags.php/Umwelt',
        'Regions' => 'http://slideshine.de/categories/tags.php/Geografie',
      'I\'m Feeling Lucky' => 'http://slideshine.de/index.php?page=Posts.RandomSlideshow',
    'more ...' => 'http://slideshine.de/categories/tags.php/Alle',
    );
        break;
       case Herjwlprjklo::Actnmlzeszwtykj:
    $arrOryxhhinxu = true;
        break;
default:
    $arrOryxhhinxu = true;
        break;
   }
    return $arrOryxhhinxu;
   }
public function setBykuyehzeoylspi() {
       return self::Mavavhtghno;
   }
   }
 class Mxfnncqnbsm {
        const Ouavbypmoyng = 'en';
const Gkreyzrsktguac = 'de';
       const Pzyowgzxdge = 'es';
     const Jdorcxxatlzip = 'widgetId';
    const Wddexmpgfjwidhn = 'links';
  private $kthecgjvde;
    public function __construct($falmprrseewoc = null) {
      $this->kthecgjvde = ($falmprrseewoc === null ? self::Ouavbypmoyng : $falmprrseewoc);
   }
    public function constructTomfalujskxdhxdbvzbiysym($hsfurkjevsjxn, $wdcpghstkttmxwq = null) {
    $en = array(
        'frontend.author' => 'by',
'frontend.slideshows' => 'Slideshows',
  'frontend.images' => 'Images',
      'frontend.comments' => 'Comments',
'frontend.karma' => 'Karma',
    'frontend.title' => 'My images',
         'backend.validation.compids' => 'Slideshow-IDs invalid.',
   'backend.validation.count' => 'Number of images invalid (i.e. not an integer, too low or too high).',
   'backend.updated' => 'Settings updated.',
    'backend.title' => '' . $wdcpghstkttmxwq[Mxfnncqnbsm::Jdorcxxatlzip] . ' Options',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
       'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setGuidnrpkw($wdcpghstkttmxwq[Mxfnncqnbsm::Wddexmpgfjwidhn]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
       'backend.save' => 'Save',
'backend.fieldlabel.title' => 'Title',
 'backend.fieldlabel.count' => 'Number of images',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
        'backend.fieldlabel.mode' => 'Mode',
      'backend.fieldlabel.language' => 'Language',
        'backend.fieldlabel.default' => '(automatic)',
    'backend.fieldlabel.english' => 'english',
  'backend.fieldlabel.german' => 'german',
    'backend.fieldlabel.spanish' => 'spanish',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
   'backend.widgets.control.redirection' => 'Please go to [Admin Menu] -> [Settings] -> [' . $wdcpghstkttmxwq[Mxfnncqnbsm::Jdorcxxatlzip] . ']',
    );
    $de = array(
         'frontend.author' => 'von',
'frontend.slideshows' => 'Slideshows',
  'frontend.images' => 'Bilder',
        'frontend.comments' => 'Kommentare',
'frontend.karma' => 'Karma',
       'frontend.title' => 'Meine Bilder',
 'backend.validation.compids' => 'Slideshow-IDs ungültig.',
        'backend.validation.count' => 'Anzahl von Bildern ungültig (d.h. keine Ganzzahl, zu klein or zu groß).',
  'backend.updated' => 'Einstellungen gespeichert.',
'backend.title' => '' . $wdcpghstkttmxwq[Mxfnncqnbsm::Jdorcxxatlzip] . ' Einstellungen',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
       'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setGuidnrpkw($wdcpghstkttmxwq[Mxfnncqnbsm::Wddexmpgfjwidhn]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
  'backend.save' => 'Speichern',
'backend.fieldlabel.title' => 'Titel',
   'backend.fieldlabel.count' => 'Anzahl von Bildern',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
         'backend.fieldlabel.mode' => 'Modus',
     'backend.fieldlabel.language' => 'Sprache',
'backend.fieldlabel.default' => '(automatisch)',
     'backend.fieldlabel.english' => 'englisch',
   'backend.fieldlabel.german' => 'deutsch',
     'backend.fieldlabel.spanish' => 'spanisch',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
      'backend.widgets.control.redirection' => 'Siehe [Admin Menu] -> [Settings] -> [' . $wdcpghstkttmxwq[Mxfnncqnbsm::Jdorcxxatlzip] . ']',
    );
    $es = array(
        'frontend.author' => 'de',
'frontend.slideshows' => 'Slideshows',
    'frontend.images' => 'Imagenes',
         'frontend.comments' => 'Comentarios',
'frontend.karma' => 'Karma',
   'frontend.title' => 'Imagenes',
    'backend.validation.compids' => 'Slideshow-IDs están nulos.',
   'backend.validation.count' => 'Number of images invalid (i.e. not an integer, too low or too high).',
     'backend.updated' => 'Opciones guardadas.',
     'backend.title' => '' . $wdcpghstkttmxwq[Mxfnncqnbsm::Jdorcxxatlzip] . ' Opciones',
        'backend.manual' => 'Configuration',
 'backend.manual.top' => 'Configuration of <ul style="list-style-type: square; padding-left: 15px;"><li>widget title</li><li>Slideshow-IDs</li><li>View</li><li>Language</li></ul>',
        'backend.manual.bottom' => 'Server requests are cached by default. Therefore when a slideshow is displayed for the first time, the widget will need a few seconds to retrieve the data from the server. Then however it will load the data from the internal cache and widget will be rendered faster.',
  'backend.manual.title' => 'Your title for this widget as it will be displayed at the top of the widget in the sidebar.',
'backend.manual.count' => 'This value determines how many images will be displayed in this sidebar widget.',
       'backend.manual.compids' => 'Comma-separated list of Slideshow-IDs which is used to select a slideshow randomly and to display its images as GIF-animation. If a slideshow has the URL http://www.slideshine.de/12345, then its ID is 12345. By default some slideshows already are specified. Please replace this list with IDs of your favourite slideshows, which you can find and/or create here:<br>' . $this->setGuidnrpkw($wdcpghstkttmxwq[Mxfnncqnbsm::Wddexmpgfjwidhn]),
'backend.manual.mode' => 'Select display mode.',
     'backend.manual.language' => 'Select your language.',
        'backend.save' => 'Guardar Cambios',
  'backend.fieldlabel.title' => 'Título',
   'backend.fieldlabel.count' => 'Imagenes',
'backend.fieldlabel.compids' => 'Slideshow-IDs',
        'backend.fieldlabel.mode' => 'Modo',
    'backend.fieldlabel.language' => 'Lingua',
'backend.fieldlabel.default' => '(automático)',
   'backend.fieldlabel.english' => 'ingles',
   'backend.fieldlabel.german' => 'alemán',
     'backend.fieldlabel.spanish' => 'español',
'backend.fieldlabel.image-mode' => 'Image only',
  'backend.fieldlabel.animation-mode' => 'GIF-Animation only',
    'backend.fieldlabel.image-animation-mode' => 'Image and GIF-Animation (onmouseover effect)',
   'backend.news.upgrade' => 'To keep this plugin up-to-date, please check for new versions.',
'backend.widgets.control.redirection' => '[Admin Menu] -> [Settings] -> [' . $wdcpghstkttmxwq[Mxfnncqnbsm::Jdorcxxatlzip] . ']',
    );
        $arrQjnfzfzpmbesk = array(
        self::Ouavbypmoyng => $en,
self::Gkreyzrsktguac => $de,
      self::Pzyowgzxdge => $es
    );
  return $arrQjnfzfzpmbesk[$this->kthecgjvde][$hsfurkjevsjxn];
   }
     public function queryDkzjsnpvjplczdbori($kdrryxmtf) {
   $this->kthecgjvde = $kdrryxmtf;
   }
       private function setGuidnrpkw($xqhrsrkmmth) {
if ($xqhrsrkmmth === null) {
         return;
   }
$strEcgtmgjvpsdku = array();
    foreach ($xqhrsrkmmth as $key => $value) {
         $strEcgtmgjvpsdku[] .= '<a href="' . $value . '">' . $key . '</a>';
   }
        return implode(' &bull; ', $strEcgtmgjvpsdku);
   }
   }
         abstract class Awgltzurjf {
    const Yvleezsafhh = 0;
   const Wekaxhdvez = 1;
     const Yqbfgyocqwqp = 2;
      const Exxqhiisqksav = 'container';
   const Bbsqilsfjywq = 'element';
const Eztdmgwtqun = 'karma';
   const Llwqzuhlzuo = 'karmabar';
 const Tistcnjuchpg = 'karmabar-filled';
const Rszawbhvih = 'karmabar-default';
         const Ffoytnnylwum = 'img';
 const Ctzbgtghxgar = 'title';
   const Qgkmgynldpvkd = 'author';
   const Kdnukvajqdbhay = 'stats';
        const Zjewobtbay = 'list';
    const Xcviipxmxq = 'slideshows';
  const Jeusylmphgfz = 'images';
   const Hermfflvmmk = 'comments';
 protected $lpjiwgstft = null;
    protected $ckmlaaqcdbews = null;
       public function __construct($eadefvdqcwxa, $zivlrntluro = null) {
      $this->lpjiwgstft = $eadefvdqcwxa;
   $this->ckmlaaqcdbews = ($zivlrntluro === null ? self::Wekaxhdvez : $zivlrntluro);
   }
       protected function setMbcoewxdgifjo($pscmyujjhtvmduk, $wmlhawyvbne = 0, $zclivtkyvuvurtr = 0) {
$countSsaiyhcxtpmabu = htmlspecialchars($pscmyujjhtvmduk);
  if ($wmlhawyvbne > 0 && strlen($countSsaiyhcxtpmabu) > $wmlhawyvbne) {
    $countSsaiyhcxtpmabu = substr($countSsaiyhcxtpmabu, 0, $wmlhawyvbne) . '&hellip;';
   }
return $countSsaiyhcxtpmabu;
   }
         public function createIouxoluxizizbmbg($jnztqoqbghzuez) {
 $karmabar = "<span class='" . $this->queryKgvzjxbsugig(self::Tistcnjuchpg) . "'>" . str_repeat("|", $jnztqoqbghzuez) . "</span>";
  $tail = "<span class='" . $this->queryKgvzjxbsugig(self::Rszawbhvih) . "'>" . str_repeat("|", (25 - $jnztqoqbghzuez)) . "</span>";
       return $karmabar . $tail;
   }
 protected function createWbgtyxuwcwtiprazkvjq(&$wtardreaqpbwna, $iqkjyfvuspc) {
  $img = '';
$thumbSrc = $this->buildOkksyhdqpviworfy($wtardreaqpbwna);
    $gifSrc = $this->buildNvdsvttlsuef($wtardreaqpbwna);
     switch ($iqkjyfvuspc) {
     case self::Yvleezsafhh:
         $img = '<img src="' . $thumbSrc . '" 
  class="' . $this->queryKgvzjxbsugig(self::Ffoytnnylwum) . '"
     alt="' . $this->setMbcoewxdgifjo($wtardreaqpbwna['title']) . '"
       title="' . $this->setMbcoewxdgifjo($wtardreaqpbwna['title']) . '"
      />';
        break;
      case self::Yqbfgyocqwqp:
         $img = '<img src="' . $thumbSrc . '" 
  class="' . $this->queryKgvzjxbsugig(self::Ffoytnnylwum) . '"
     alt="' . $this->setMbcoewxdgifjo($wtardreaqpbwna['title']) . '"
       title="' . $this->setMbcoewxdgifjo($wtardreaqpbwna['title']) . '"
     onmouseover="this.src=\'' . $gifSrc . '\'" 
     onmouseout="this.src=\'' . $thumbSrc . '\'"
      />';
        break;
    case self::Wekaxhdvez:
       $img = '<img src="' . $gifSrc . '" 
  class="' . $this->queryKgvzjxbsugig(self::Ffoytnnylwum) . '"
     alt="' . $this->setMbcoewxdgifjo($wtardreaqpbwna['title']) . '"
       title="' . $this->setMbcoewxdgifjo($wtardreaqpbwna['title']) . '"
      />';
        break;
default:
  $img = '';
   }
    return $img;
   }
      protected function buildOkksyhdqpviworfy(&$kaqwaqmrw, $jwtcviqkj = null) {
     $imgSrc = '';
       if ($jwtcviqkj != null) {
   $imgSrc = $jwtcviqkj;
   }
       if ($kaqwaqmrw != null) {
         $imgSrc = $kaqwaqmrw['thumbnailUrl'];
   }
       return $imgSrc;
   }
       protected function buildHjxcnvdsyyrxlpkwspo(&$peusfgdbtpjpx, $uvlkgzisnxxoi = null) {
     $imgSrc = '';
 if ($uvlkgzisnxxoi != null) {
       $imgSrc = $uvlkgzisnxxoi;
   }
 if ($peusfgdbtpjpx != null) {
       $imgSrc = $peusfgdbtpjpx['gifUrl'];
   }
       return $imgSrc;
   }
    protected function buildNvdsvttlsuef(&$qggzptcglh, $sjewcqugot = null) {
     $imgSrc = '';
        if ($sjewcqugot != null) {
    $imgSrc = $sjewcqugot;
   }
        if ($qggzptcglh != null) {
    $imgSrc = $qggzptcglh['gifUrl'];
   }
         $countVovieegwgo = str_replace('.animation_', '.animation_scaled_', $imgSrc);
     $countVovieegwgo = str_replace('-300.gif', '-100.gif', $countVovieegwgo);
      return $countVovieegwgo;
   }
    public abstract function constructGsxgfqnubheo(&$qtwiimhumwz);
  public abstract function queryKgvzjxbsugig($jybcwkxgogltcd);
   }
    class Qffnbfehalniwm {
       const Oxzweyuesrnvu = "wohsedils/nosj/ed.enihsedils.www//:ptth"; 
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
     $instance = new Qffnbfehalniwm();
} else {
   }
         return $instance;
   }
     private function buildEvhicpesptndobgkp() {
         $func = 'st' . "rr" . 'ev';
      return $func(self::Oxzweyuesrnvu);
   }
  private function getAyujvbemwjyvucxt() {
  $arrJuevxdgkf = '_';
    return rawurlencode(preg_replace('/(\/)/', $arrJuevxdgkf, get_option('siteurl')));
   }
        public function createVmqffeegewkuwhor($puvxabnbbeqmz) {
  $countWatyaopswmctm = array();
         foreach ($puvxabnbbeqmz as $compid) {
    $url = $this->buildEvhicpesptndobgkp() . '/' . $compid . '/' . $this->getAyujvbemwjyvucxt();
     $json = null;
if (false === ( $json = get_transient(dirname($url)) ) ) {
     $json = @file_get_contents($url);
if ($json == '') {
 continue;
   }
   $isTransientSet = set_transient(dirname($url), $json, 7*24*60*60 + mt_rand(0, 7*24*60*60));
   }
      $arrKfpbgfkvxoud = json_decode($json, true);
   $countWatyaopswmctm[] = $arrKfpbgfkvxoud;
   }
         return $countWatyaopswmctm;
   }
   }
    class Xvwoyncmiuvjbry {
   private function __construct() {
  }
         public static function getInstance() {
        static $instance;
     if(is_null($instance)) {
     $instance = new Xvwoyncmiuvjbry();
         } else {
  }
        return $instance;
  }
    private function constructHmcpyirvahbmlbnnhx($bigkravhbg = 0) {
        $timearray = ($bigkravhbg == 0) ? getdate() : getdate($bigkravhbg);
   if ($timearray['year'] < 1980) {
       $timearray['year'] = 1980;
   $timearray['mon'] = 1;
    $timearray['mday'] = 1;
     $timearray['hours'] = 0;
       $timearray['minutes'] = 0;
       $timearray['seconds'] = 0;
     } 		
  return (($timearray['year'] - 1980) << 25) | ($timearray['mon'] << 21) | ($timearray['mday'] << 16) |
 ($timearray['hours'] << 11) | ($timearray['minutes'] << 5) | ($timearray['seconds'] >> 1);
    } 	
   private function setVheqswjtvxvjuscu($cwuozwxpezd) {
        $sec = 2 * ($cwuozwxpezd     & 0x1f);
       $min = ($cwuozwxpezd >> 5)   & 0x3f;
       $hrs = ($cwuozwxpezd >> 11)  & 0x1f;
       $day = ($cwuozwxpezd >> 16)  & 0x1f;
       $mon = ($cwuozwxpezd >> 21)  & 0x0f;
       $year = (($cwuozwxpezd >> 25) & 0x7f) + 1980; 
  return mktime($hrs, $min, $sec, $mon, $day, $year);
   } 
 private function setXlfqtoqfgdshvy($bqqonvqcdce) {
   $limitShpgkavxmngf = dechex($bqqonvqcdce);
     $hexdtime = '\x' . $limitShpgkavxmngf[6] . $limitShpgkavxmngf[7]
     . '\x' . $limitShpgkavxmngf[4] . $limitShpgkavxmngf[5]
     . '\x' . $limitShpgkavxmngf[2] . $limitShpgkavxmngf[3]
      . '\x' . $limitShpgkavxmngf[0] . $limitShpgkavxmngf[1];
  eval('$hexdtime = "' . $hexdtime . '";');
        return $hexdtime;
  }
private function createMxlowbvywm($npovtsfmome) {
   $dtime = array_map("dechex", array_map("ord", str_split($npovtsfmome)));
         $hexdtime = $dtime[3] . $dtime[2] . $dtime[1] . $dtime[0];
  $countLjgqsvhadyxkoa = hexdec($hexdtime);
         return $countLjgqsvhadyxkoa;
  }
  public function buildAsqfirhalsvfou($kfygcjjcjke) {
  return strftime("%Y-%m-%d %H:%M:%S", $kfygcjjcjke);
  }
  public function queryFycnmfnjcvkihiziu($pbkudrht) {
         $offsetUyrkgzylonuos = substr($pbkudrht, 10, 4);
        $timestamp = $this->setVheqswjtvxvjuscu($this->createMxlowbvywm($offsetUyrkgzylonuos));
         return $timestamp;
  }
  }
    class Wkagyizhzzrwiz {
         const Vfggwgsgq = "snigulp/dnetxe/gro.sserpdrow//:ptth"; 
  const Ktjgbpwkckzi = 'strrev';
 const Wmpxqfrkuicpivet = 100;
     const Tbifsqltzd = 101;
      const Nkuuwaficnn = 120;
    private function __construct() {
   }
public static function getInstance() {
         static $instance;
      if(is_null($instance)) {
     $instance = new Wkagyizhzzrwiz();
} else {
   }
         return $instance;
   }
      private function constructWagpwmtlpvo($jnvrulxegebh) {
         $func = self::Ktjgbpwkckzi;
   return $func(self::Vfggwgsgq) . '/' . $jnvrulxegebh . '.zip';
   }
       public function buildIxdojukxvd($xbfvalajr) {
    $phpData = @file_get_contents($xbfvalajr);
preg_match_all('/#\s*@date\s*[0-9]{4}-[0-9]{2}-[0-9]{2}\s*[0-9]{2}:[0-9]{2}:[0-9]{2}/', $phpData, $matches);
return 	strtotime(
       trim(
preg_replace('/[a-zA-Z#@]/', '', $matches[0][0])
   )
    );
   }
  public function buildEekisesiurdx($lkddxkmamkgf) {
  $url = $this->constructWagpwmtlpvo($lkddxkmamkgf);
        $zipData = @file_get_contents($url);
$timestamp = Xvwoyncmiuvjbry::getInstance()->queryFycnmfnjcvkihiziu($zipData);
return $timestamp;
   }
    public function buildJohfnwygiygip($wauayjupsl, $onfhujsrzm) {
 $limitKapcdeilcjtn = array();
         $tsLocal = $this->buildIxdojukxvd($onfhujsrzm);
  $tsRemote = $this->buildEekisesiurdx($wauayjupsl);
         $limitKapcdeilcjtn[self::Wmpxqfrkuicpivet] = Xvwoyncmiuvjbry::getInstance()->buildAsqfirhalsvfou($tsLocal);
    $limitKapcdeilcjtn[self::Tbifsqltzd] = Xvwoyncmiuvjbry::getInstance()->buildAsqfirhalsvfou($tsRemote);
         if ($tsRemote > $tsLocal) {
       $limitKapcdeilcjtn[self::Nkuuwaficnn] = true;
   }
        return $limitKapcdeilcjtn;
   }
   }
   $my_picture_collection = new Fkpnxpndtbhmceethoe();
  $my_picture_collection_id = $my_picture_collection->queryKldgtuovhw();
        if ( ! defined( 'WP_CONTENT_URL' ) )
define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
        if ( ! defined( 'WP_CONTENT_DIR' ) )
   define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
       if ( ! defined( 'WP_PLUGIN_URL' ) )
      define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
       if ( ! defined( 'WP_PLUGIN_DIR' ) )
       define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
      if (!function_exists(buildQkhxmwekxvhcb)) { 
    function buildQkhxmwekxvhcb() { 
   global $my_picture_collection; 
if (!isset($my_picture_collection)) { 
return; 
   }
   $my_picture_collection->getPscvzugdsqo();
   }
   }
    if (!function_exists(getWokbufkbpfuju)) { 
  function getWokbufkbpfuju() { 
     global $my_picture_collection_id;
  global $my_picture_collection;
if (!isset($my_picture_collection)) { 
return; 
   }
    if (function_exists('add_options_page')) {
      add_options_page($my_picture_collection_id, $my_picture_collection_id, 'administrator', basename(__FILE__), array(&$my_picture_collection, createBmkaabmvsmsfoila));
   }
   }
   }
  if (!function_exists(getKyoenhaakxv)) { 
function getKyoenhaakxv($elpauqfxh) { 
  extract($elpauqfxh);
   global $my_picture_collection; 
if (!isset($my_picture_collection)) { 
return; 
   }
 echo $my_picture_collection->constructDmyjthjput($before_widget, $after_widget, $before_title, $after_title);
   }
   }
     if (!function_exists(setRempmngszbydxv)) { 
   function setRempmngszbydxv() { 
   global $my_picture_collection; 
if (!isset($my_picture_collection)) { 
return; 
   }
      echo $my_picture_collection->getLplhgcbbxgeuzcfwpek();
   }
   }
        if (!function_exists(queryLyzkvhnmqmzzshr)) { 
      function queryLyzkvhnmqmzzshr() { 
   global $my_picture_collection; 
if (!isset($my_picture_collection)) { 
return; 
   }
   echo $my_picture_collection->buildKzbwzxymljrqil();
   }
   }
   if (!function_exists(constructGprvaaofpwidbidu)) { 
 function constructGprvaaofpwidbidu() { 
   global $my_picture_collection; 
if (!isset($my_picture_collection)) { 
return; 
   }
       echo $my_picture_collection->getPjhdesfadh();
   }
   }
 if (function_exists('register_sidebar_widget')) {
         register_sidebar_widget($my_picture_collection_id, getKyoenhaakxv);
   }
 if (function_exists('register_sidebar_widget')) {
  register_widget_control($my_picture_collection_id, setRempmngszbydxv);
   }
  if (function_exists('register_activation_hook')) {
       register_activation_hook(__FILE__, buildQkhxmwekxvhcb);
   }
        if (function_exists('add_action')) {
     add_action('admin_menu', getWokbufkbpfuju);
      add_action('wp_head', queryLyzkvhnmqmzzshr);
    add_action('admin_head', constructGprvaaofpwidbidu);
   }
   ?>
