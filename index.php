<?php 
//ini_set("display_errors", 1);

$title = "Translate Subtitles for Free Online in 193 Languages. Supports SRT, VTT, ASS, SUB, SBV & STL- TranslateSubtitlesOnline.com";
$path = "https://translatesubtitlesonline.com/";
?>

<!DOCTYPE html>
<html lang="en">
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/head_ss.php'); ?>
    <main>
      <section id="main" class="jumbotron mb-0 pb-3 bg-primary">
  <div class="search-block-default-height">
    <div class="container text-white h-100 container-search">
      <div class="align-items-center text-center pl-lg-5">
        <h1 class="mb-3 mt-3 main_title">Translate Subtitles Online</h1>
        <p class="">Free online subtitles translator & editor in 193 languages. Translate srt, vtt, sub & more. No Ads, Forever Free.</p>
        <div id="m-form" class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-6">
<div id="uploads">
   <div class="upload-container">
        <div class="drop-area" id="drop-area">
            <button>Upload File <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cloud-arrow-up-fill" viewBox="0 0 16 16">
  <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2m2.354 5.146a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0z"/>
</svg></button>
            <p style="font-size: 12px; color: white; margin-top: 5px;">or drag & drop here. Supports SRT, VTT, ASS, SBV, SUB & STL. <br> upto 100MB.</p>
           
            <!-- <input type="file" id="fileInput"> -->
           <input type="file" aria-label="upload files" id="inputFile">
        </div>
            <br><span id="infoBtn"style="cursor: pointer;color:yellow">ℹ️ supported file formats</span>
		  <div id="progress-container" style="display:none">
            <div id="progress-bar"></div>
          </div>
          <div style="display:none" id="progdata"></div>
            <div style="display:none" id="process"><img loading="lazy" src="/assets/loader.svg" id="img" width="60" height="60"></div>
            <div style="display:none" id="error"></div>
    </div> 
</div>
<div class="container mt-3">
  <form onsubmit="return false;" name="reportform">
           <p class=""><b>Send Your Feedback to Improve the tool.</b></p>
    <div class="mb-3 mt-3">
      <textarea class="form-control" rows="2" id="comment" name="comment" placeholder="Describe the issue..."></textarea>
    </div>
    <button type="submit" id="reportbutton" class="btn btn-success">Send Feedback</button>
  </form>
</div>
 <br><div style="display:none" id="error"><i class="fa-solid fa-triangle-exclamation fa-bounce fa-xl"></i> </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <!---->
      <!---->
      <!---->
    </div>
    <div>
      <!---->
      <!---->
    </div>
  </div>
</section>
      <section class="container mt-5 mb-5 align-items-center b-instruction how-to-mp4">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <div class="media">
              <div class="media-body">
                <p>Translate subtitles with our free online software. Our translator supports widely recognized <a style="color:red" target="_blank" href="https://blog.amara.org/2018/10/15/what-subtitle-file-format-should-i-use/"> subtitle file formats</a> like SRT, VTT, ASS, SBV, SUB & STL. TranslateSubtitlesOnline.com is a free website that allows you to get your subtitle file translated to your desired language without paying any fees. What's more, it supports 193 languages & is fast & efficient.</p>
                <p>Our tool is not only safe and user-friendly but also completely FREE! All translated subtitle files can be downloaded online without any annoying ads.</p>
                <p>Compatible with popular browsers like Google Chrome, Mozilla Firefox, Safari, Opera, and all Chromium-based browsers, our subtitle translator program ensures a seamless experience.</p>
                <p>We <span id="infoBtn" style="cursor: pointer;color:red">support multiple file formats</span> - allows you to do automatic subtitle translation from srt & other file types! No need to download any software or random Apk apps (we hate them as much as you do.)</p>
              </div>
            </div>
          </div>
        </div>
        <h2 class="text-muted mb-0 text-center">Supported Platforms:</h2>
        <div class="row justify-content-center">
          <div class="col-6 col-sm-2 p-4 text-center">
            <img src="/assets/windows.svg" alt="" width="150" height="150">
          </div>
          <div class="col-6 col-sm-2 p-4 text-center">
            <img src="/assets/apple.svg" alt="" width="150" height="150">
          </div>
          <div class="col-6 col-sm-2 p-4 text-center">
            <img src="/assets/android.svg" alt="" width="150" height="150">
          </div>
          <div class="col-6 col-sm-2 p-4 text-center">
            <img src="/assets/linux.svg" alt="" width="150" height="150">
          </div>
        </div>
      </section>
      <section class="bg-08003a" style="overflow-wrap:anywhere">
        <div class="container pt-5 pb-5 align-items-center color-white bg-08003a">
          <div>
            <h2 class="col-12 text-center mb-3">How to translate subtitles?</h2>
            <p>Believe us, it's super easy! All we need is the subtitle file in the recognised format, & we take care of the rest. Just make sure you have the correct subtitle file in place.</p>
            <p>We hate PC software, APK or Chrome extensions as much as you do. Hence, you don't need to install any of them in order to use our services. Let's see how you can make use of our subtitle translation services from this tool.</p>
          </div>
        </div>
      </section>
      <section class="container mt-5 mb-5 align-items-center b-instruction media-height how-to-mp4">
        <h3 class="col-12 text-center mb-5">How to use our free subtitle translator website?</h3>
        <div class="row">
          <div class="col-sm-6 col-lg-3" id="instruction">
            <div class="media">
              <div class="text-center">
                <div class="iconbox iconmedium rounded-circle text-info mb-2">
                  <i class="fas fa-copy"></i>
                </div>
              </div>
              <div class="media-body">
                <h4>Keep your subtitle file ready</h4>
                <p class="text-muted">Make sure you have the right subtitle file for the translation. We support <a target="_blank" style="color:red" href="https://www.speechpad.com/captions/srt"> srt</a>, vtt, ass & <span id="infoBtn" style="cursor: pointer;color:red">other formats</span>.</p>
              </div>
            </div>
            <div class="img mx-auto mb-4 pr-0 mb-lg-0 col-10 col-sm-12">
              <picture>
                <br><img loading="lazy" src="/assets/keep-subtitle-file-ready.webp?v=3" alt="locate subtitle files to translate on your computer" width="225" height="180">
              </picture>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="media">
              <div class="text-center">
                <div class="iconbox iconmedium rounded-circle text-purple mb-2">
                  <i class="fas fa-mouse-pointer mouse-pointer-center"></i>
                </div>
              </div>
              <div class="media-body">
                <h4>Upload the file to our tool</h4>
                <p class="text-muted">Click on upload file button or drag & drop. It only supports one file at a time. But make sure it is in correct format as specified.</p>
              </div>
            </div>
            <div class="img mx-auto mb-4 pr-0 mb-lg-0 col-10 col-sm-12">
              <picture>
                <br><img loading="lazy" src="/assets/upload-files-to-free-subtitles-translator-tool.webp?v=2" alt="upload files to free subtitles translator tool" width="225" height="180">
              </picture>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="media">
              <div class="text-center">
                <div class="iconbox iconmedium rounded-circle text-info mb-2">
                  <i class="fas fa-sync-alt"></i>
                </div>
              </div>
              <div class="media-body">
                <h4>Select the desired language</h4>
                <p class="text-muted">From the dropdown, select or search your desired translate language & wait for sometime. Currently we support 193 languages.</p>
              </div>
            </div>
            <div class="img mx-auto mb-4 pr-0 mb-lg-0 col-10 col-sm-12">
              <picture>
                <br><img loading="lazy" src="/assets/select-target-translation-language-from-the-dropdown-or-use-search-function.webp?v=2" alt="select target translation language from the dropdown or use search function" width="225" height="180">
              </picture>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="media">
              <div class="text-center">
                <div class="iconbox iconmedium rounded-circle text-info mb-2">
                  <i class="fas fa-download"></i>
                </div>
              </div>
              <div class="media-body">
                <h4>Download translated files</h4>
                <p class="text-muted">Preview the translated subtitles in realtime before the final download. You can even <a href="/online-subtitle-editor/" target="_blank" style="color:red;"> edit the file online<a/> on the same page.</p>
              </div>
            </div>
            <div class="img mx-auto mb-4 pr-0 mb-lg-0 col-10 col-sm-12">
              <picture>
                <br><img loading="lazy" src="/assets/download-or-preview-translated-files.webp?v=2" alt="preview or edit the translated file in the table below before download" width="225" height="180">
              </picture>
            </div>
          </div>
        </div>
      </section>
<section class="bg-08003a" style="overflow-wrap:anywhere">
    <div class="container pt-5 pb-5 align-items-center color-white bg-08003a">
        <div>
            <h2 class="col-12 text-center mb-3">
                Our Online Caption Translator Key Features:</h2>
            <p>The best subtitle translation software with no downtime. </p>
        <ul class="w-100">
             <li>🌐 Supports 193 Languages – Translate subtitles across a vast range of <a style="color:red" target="_blank" href="https://cloud.google.com/translate/docs/languages"> global languages</a> with precision.</li>
            <li>📁 Multiple Subtitle Formats – Compatible with .srt, .vtt, .sub, .ass, .sbv, and .stl formats for maximum flexibility.</li>
           <li>📝 Editable Translations – Review and fine-tune translated subtitles before downloading to ensure top quality.</li>
           <li>Fast & Efficient Processing – Lightning-fast translations with optimized performance for a seamless experience.</li>
            <li>⬇️ One-Click Download – Download translated files instantly in your preferred format.</li>
            <li>🌍 Cross-Platform Compatibility – Works smoothly on desktop, tablet, and mobile browsers—no installation needed.</li>
           <li> 💻 User-Friendly Interface – Clean, responsive, and intuitive design suitable for both casual users and professionals. </li>
            <li>🔐 100% file privacy – auto-deleted after processing.</li>
            <li>💬 No sign-up needed for quick translations.</li>       
        </ul>
        </div>
    </div>
</section>
      <section class="container mt-5 mb-5 align-items-center">
        <div class="row p-3">
          <div class="col-12">
            <h3 class="text-center pb-2">Questions &amp; Answers</h3>
            <div class="accordion" id="accordion-mp4 br-25" itemscope itemtype="https://schema.org/FAQPage">
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading0">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0"> What does subtitles mean? </button>
                  </h2>
                </div>
                <div id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p><a href="https://www.3playmedia.com/blog/closed-captioning-vs-subtitles/" target="_blank" style="color:red"> Subtitles are the textual representation</a> of dialogues and sounds in a video. They help viewers understand the spoken content, especially in foreign languages, noisy environments, or for those with hearing impairments.</p>
              
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading1">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1"> How to translate subtitles?</button>
                  </h2>
                </div>
                <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Follow these simple steps to translate subtitles using our tool.</p>
                 <ul>
                  <li>✅ Upload your subtitle file (supported formats: .srt, .vtt, .sub, .ass, .sbv, .stl).</li>
                  <li>⚙️ Wait a moment while our tool processes and translates the content.</li>
                <li>📝 Review and edit the translated subtitles if needed.</li>
               <li> ⬇️ Download the final file in your preferred format. </li>
                </ul>
                 It's quick, accurate, and requires no technical knowledge!
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading2">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"> Can I Convert subtitles to SRT? </button>
                  </h2>
                </div>
                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Yes, our platform includes a <a href="/convert-subtitles-online/" target="_blank" style="color:red;"> built-in subtitle converter<a/>. You can upload subtitles in formats like .vtt, .sub, .ass, .sbv, or .stl and convert them to .srt format quickly and accurately. </p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading3">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">How to translate SRT file?
</button>
                  </h2>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>To translate an SRT file, upload it to our website, choose your desired language, and the tool will instantly generate a translated version. You can also preview and edit the translation before downloading.</p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading4">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"> Can I preview the translated subtitles before downloading? </button>
                  </h2>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Yes! once you translate the subtitles from the uploaded file, you can preview and edit them in reaal time. Download only when you’re happy with the final output. 
             </p>
               <p> This ensures you get the desired output without unnecessary downloads. </p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading5">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5"> What file formats do you support? </button>
                  </h2>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Our online tool supports 6 subtitle file formats: srt, vtt, sbv, sub, ass & stl. We support translation in 193 different languages. We are planning to add other popular file formats in coming weeks.</p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading6">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6"> Is my uploaded file stored on your servers? </button>
                  </h2>
                </div>
                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>No, our tool does not store your files. The processing happens in real time at the backend servers, but the files are automatically deleted after processing. No data is stored on our servers permanently. This ensures privacy and security. We respect our user's privacy. </p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading7">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">How long does it take to process a subtitle file? </button>
                  </h2>
                </div>
                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>The processing time depends on the file size. Larger files take longer. For a typical 3-5 minute video, the subtitle translation is usually completed within 1 minute. </p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading8">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8"> How to translate English subtitles to your own language? </button>
                  </h2>
                </div>
                <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Upload your English subtitle file to our platform, pick your native or preferred language from the list, and the tool will provide a translated subtitle file which you can edit & download. It's fast, free, and user-friendly.</p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading9">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">Can Google Translate subtitles?</button>
                  </h2>
                </div>
                <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>While <a style="color:red" target="_blank" href="https://translate.google.com/"> Google Translate</a> itself doesn't directly support <a href="https://clideo.com/resources/subtitle-file-formats-overview" target="_blank" style="color:red">subtitle files</a>, our tool integrates Google Translate in the backend to automatically translate subtitles accurately and in context.</p>
                  </div>
                </div>
              </div>
              <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading10">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10"> Is it safe to use? </button>
                  </h2>
                </div>
                <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>We are 100% safe & genuine to use. We do not store your files on our systems on permanent basis. You will get only what you expect for. No wild redirects, no random files download, only music.</p>
                  </div>
                </div>
              </div>
			  <div class="card" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <div class="card-header" id="heading11">
                  <h2 class="mb-0" itemprop="name">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11"> How to translate subtitles into multiple languages? </button>
                  </h2>
                </div>
                <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion-mp4" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                  <div class="card-body" itemprop="text">
                    <p>Our tool supports translation into 193 languages. You can upload your original subtitle file and choose different languages one by one to get translated versions for each—perfect for global audiences.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <a href="#main" class="btn btn-success">Back to Top</a>
        </div>
      </section>
<form id="dynForm" action="/translate.php" method="post" style="display:none"> <input type="submit">
  <textarea rows="3000" cols="2000" name="data" form="dynForm" id="jdata">I am an inout firl</textarea>
</form>
<form id="tform" action="/song.php" method="post" style="display:none"> <input type="submit">
  <textarea rows="3000" cols="2000" name="data" form="tform" id="tdata">I am an inout firl</textarea>
</form>
<form id="aform" action="/artist.php" method="post" style="display:none"> <input type="submit">
  <textarea rows="3000" cols="2000" name="data" form="aform" id="adata">I am an inout firl</textarea>
</form>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer_ss.php'); ?>  
  <span id="audioDuration"> </div>
  </body>
<script>

function setCookie(cname,cvalue,exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

const dropArea = document.getElementById('drop-area');

dropArea.addEventListener('dragenter', (e) => {
  e.preventDefault();
  dropArea.classList.add('dragover');
});

dropArea.addEventListener('dragover', (e) => {
  e.preventDefault();
});

dropArea.addEventListener('dragleave', () => {
  dropArea.classList.remove('dragover');
});

dropArea.addEventListener('drop', (e) => {
  e.preventDefault();
  dropArea.classList.remove('dragover');
});

</script>

<script>
let fileList = [];
const allowedFormats = ["srt", "vtt", "ass", "sbv", "sub", "stl", "SRT", "VTT", "ASS", "SBV", "SUB", "STL"];

$(document).ready(function() {
   $('#reportbutton').on("click",function() {
  send_report();
});

     $('#fileTable').hide();
    const dropArea = document.getElementById("drop-area");
    const inputFile = document.getElementById("inputFile");
    const uploadButton = dropArea.querySelector("button");

    // Click event to open file dialog
    uploadButton.addEventListener("click", () => inputFile.click());

    // Handle file selection
    inputFile.addEventListener("change", function(event) {
        handleFiles(event.target.files);
    });

    // Drag & Drop Event Listeners
    dropArea.addEventListener("dragover", (event) => {
        event.preventDefault();
        dropArea.classList.add("dragging");
    });

    dropArea.addEventListener("dragleave", () => dropArea.classList.remove("dragging"));

    dropArea.addEventListener("drop", (event) => {
        event.preventDefault();
        dropArea.classList.remove("dragging");
        handleFiles(event.dataTransfer.files);
    });

})

function handleFiles(files) {
    if (files.length === 0) return;
    const file = files[0];
    if(getExtension(file.name)){
	showFormats(file);
        //redirect to srt processing page.
     }else{
     $('#progdata').show();
     $('#progdata').html('<br><h5 style="color: yellow;">⚠️ Invalid File: ' + file.name + '. Check supported file types. </h5>');
     }
}

function allowedSize(file) {
  const maxSizeInBytes = 100* 1024 * 1024; // 100 MB
  return file.size <= maxSizeInBytes;
}

function showFormats(file) {
  if(!allowedSize(file)){
                           $('#progdata').show();
                           $('#progdata').html('<br><h5 style="color: yellow;">⚠️ Size limit exceeded: files upto 100 MB are allowed. </h5>');
                            return;
   }
  $('#infoBtn').hide();
  $('#drop-area').hide();

      $('#progdata').hide();
      $('#infoBtn').hide();
      uploadFile(file);
}

function uploadFile(file) {
    const chunkSize = 0.5 * 1024 * 1024; // 2MB per chunk
    const totalChunks = Math.ceil(file.size / chunkSize);
    let chunkIndex = 0;
	showUploadProgress(0, totalChunks, chunkSize, file.size);

    function uploadChunk(f) { console.log(f);
        if (chunkIndex >= totalChunks) {
            console.log("All chunks uploaded." + f);
            // $('#progress-container').hide();
              $('#progdata').html('<b> File: ' + f +' uploaded successfully. Initiating Translation...</b>');
            //extract(f); // Call extract.php after completion
			
				const songdata = [f];
				var arr = encodeURIComponent(JSON.stringify(songdata));
				document.getElementById("jdata").innerHTML = arr;
				document.getElementById("dynForm").submit();
				  
            return;
        }

        const start = chunkIndex * chunkSize;
        const end = Math.min(start + chunkSize, file.size);
        const chunk = file.slice(start, end);
		
		showUploadProgress(chunkIndex + 1, totalChunks, chunkSize, file.size);

        let formData = new FormData();
        formData.append("chunk", chunk);
        formData.append("filename", file.name);
        formData.append("chunkIndex", chunkIndex);
        formData.append("totalChunks", totalChunks);
		

        $.ajax({
            url: "/api/upload.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(f) {
                console.log(`Chunk ${chunkIndex + 1}/${totalChunks} uploaded`);
                chunkIndex++;
                uploadChunk(f); // Upload the next chunk
            },
            error: function(xhr, status, error) {
                console.error("Upload Error:", error);
            }
        });
    }

    uploadChunk(); // Start uploading chunks
}

function showUploadProgress(chunkIndex, totalChunks, chunkSize, fileSize){
		var percent = (chunkIndex  / totalChunks) * 100;
                var sizeMB = fileSize / (1024 * 1024);
		var uploadedSize = sizeMB * percent / 100;
                var progdata  = '<b>' + Math.round(percent) + '%<br> ' + uploadedSize.toFixed(2) + ' MB / ' + sizeMB.toFixed(2) + ' MB</b>' ;
                $('#progress-container').show();
                $('#progdata').show();
                $('#process').show();
                $('#drop-area').hide();
                $('#progdata').html(progdata);
		updateProgress(percent);
		console.log(uploadedSize);
		console.log(percent);		
}

function updateProgress(percent) {
    $('#progress-container').show();
    const bar = document.getElementById('progress-bar');
    if (percent < 0) percent = 0;
    if (percent > 100) percent = 100;
    bar.style.width = percent + '%';
}

function getExtension(fileName) {
    const lastDot = fileName.lastIndexOf('.');
    if (lastDot === -1 || lastDot === 0) return false; // No extension or hidden file

    const ext = fileName.slice(lastDot + 1).toLowerCase();
    return allowedFormats.includes(ext) ? true: false;
}

 var tip =  'srt, vtt, ass, sbv, sub, stl';

tippy('#infoBtn', {
    content: tip,
    placement: 'top',
    animation: 'shift-away',
    arrow: true,
  });

</script>
    
<style>

#progress-container {
    width: 80%;
    height: 25px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
    margin-bottom: 10px;
    margin-left: 15%;
    margin-top: 10px;
    margin-right: 33%;
}

#progress-bar {
    height: 100%;
    width: 0%;
    background-color: red;
    transition: width 0.3s ease
} 
 </style>
<script>
function send_report(){
    $("#reportbutton").html('Sending...');
   let email = getCookie("uemail");
   //var issue = $("option:selected", $("#cars")).text()
   //var splink = $("#splink").val();
   var comment = $("#comment").val();
   $.ajax({
                url: "/api/issues.php",
                type: "get",
                dataType: "text",
                data: {
                    comment: comment,
                    email: email
                },
                success: function(b) {
                  $("#reportbutton").html('Report Sent! We will look into this.');
                  $('#reportbutton').prop('disabled', true);
                }
   });
}
</script>
</html>
