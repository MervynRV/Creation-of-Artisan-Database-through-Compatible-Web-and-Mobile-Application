<?php
     $insert = false;
     if (isset($_POST['name']))
     {
        
        $server= "localhost";
        $username= "root";
        $password= "";
        $db_name = "artreg";
        
        $conn = mysqli_connect($server, $username, $password, $db_name);
        if(!$conn)
        {
          die("connection died". mysqli_connect_error());
         }
  
         $sellername=mysqli_real_escape_string($conn , $_REQUEST['sellername']);;
         $sellerEmail=mysqli_real_escape_string($conn , $_REQUEST['sellerEmail']);;
         $sellerPassword=mysqli_real_escape_string($conn , $_REQUEST['sellerPassword']);;
         $sellerPhone=mysqli_real_escape_string($conn , $_REQUEST['sellerPhone']);;
         $sellerCategory=mysqli_real_escape_string($conn , $_REQUEST['sellerCategory']);;
         $sellerothers=mysqli_real_escape_string($conn , $_REQUEST['sellerothers']);;
         $selleraddress=mysqli_real_escape_string($conn , $_REQUEST['selleraddress']);;
         $sellerpincode=mysqli_real_escape_string($conn , $_REQUEST['sellerpincode']);;
         $selleroccupation=mysqli_real_escape_string($conn , $_REQUEST['selleroccupation']);;
         $sellerexperience=mysqli_real_escape_string($conn , $_REQUEST['sellerexperience']);;
         $sellerDOB=mysqli_real_escape_string($conn , $_REQUEST['sellerDOB']);;
         $sellerAadhaar=mysqli_real_escape_string($conn , $_REQUEST['sellerAadhaar']);;
         $sellerPAN=mysqli_real_escape_string($conn , $_REQUEST['sellerPAN']);;
         $sellerAHN=mysqli_real_escape_string($conn , $_REQUEST['sellerAHN']);;
         $sellerAN=mysqli_real_escape_string($conn , $_REQUEST['sellerAN']);;
         $sellerBranch=mysqli_real_escape_string($conn , $_REQUEST['sellerBranch']);;
         $sellerIFSC=mysqli_real_escape_string($conn , $_REQUEST['sellerIFSC']);;
         $sellerPhoto=mysqli_real_escape_string($conn , $_REQUEST['sellerPhoto']);;
    
        
          
         
    
         
        $sql = " INSERT INTO `artisans`.`artreg` ( `Name`, `Email`, `Password`, `mobileno`, `category`, `others`, `address`, `postal code`, `occupation`, `Experience`, `DOB`, `Aadhar No.`, `PAN`, `Acc Name`, `Acc no`, `Branch Name`, `IFSC code`, `photo`) VALUES ('$sellername', '$sellerEmail', '$sellerPassword', '$sellerPhone', '$sellerCategory', '$sellerothers', '$selleraddress', '$sellerpincode', '$selleroccupation', '$sellerexperience', '$sellerDOB', '$sellerAadhar', '$sellerPAN', '$sellerAHN', '$sellerAN', '$sellerBranch', '$sellerIFSC', '$sellerPhoto');";
        //echo $sql;
    
        if($conn->query($sql)== true)
        {
          //echo "successfully inserted";
          $insert = true;
        }
        else{
          echo "error $sql <br>$conn->error";
        }
    
        $conn->close();
     }
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <!--Our CSS--><link rel="stylesheet" href="style.css">
   <title>Signup Page</title>
    <link rel="shortcut icon" href="image/logobgl.png" type="image/x-icon">
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      padding-top: 50px;
      background-color: #e9edc9;
    }

    .form-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 600px;
      height: auto;
      background-color: #fefae0;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-top: auto;
      margin-bottom: auto;
    }

    .form-container .form-wrapper {
      width: 60%;
    }

    .form-container .picture {
      width: 40%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <div class="form-container">
    <div class="form-wrapper">
      <a class="br1" href="index.html">
        <img src="image/logobgl.png" alt="brand" class="logo1">
      </a>
      <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" id="customer-tab" data-bs-toggle="pill" href="#customer" role="tab">Customer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="seller-tab" data-bs-toggle="pill" href="#seller" role="tab">Artist</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="customer" role="tabpanel">
          <h3>Sign up as Customer</h3>
          <form>
            <div class="mb-3">
              <label for="customerName" class="form-label">Name</label>
              <input type="text" class="form-control" id="customerName" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label for="customer" class="form-label">Mobile Number</label>
              <input type="tel" class="form-control" id="sellerPhone" placeholder="Mobile Number" required>
            </div>

            <div class="mb-3">
              <label for="customerEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="customerEmail" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="customerPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="customerPassword" placeholder="Enter a password" required>
            </div>
            <div class="mb-3">
              <label for="customerDOB" class="form-label">Date Of Birth</label>
              <input type="date" class="form-control" id="customerDOB" placeholder="Enter a your Birth Date" required>
            </div>
            <div class="mb-3">
              <label for="customerAadhaar" class="form-label">Aadhaar Number</label>
              <input type="text" class="form-control" id="customerAadhaar" placeholder="Enter Your Aadhaar Number" required>
            </div>
            <div class="mb-3">
              <label for="customerPhoto" class="form-label">Upload Image</label>
              <input type="file" class="form-control" id="customerPhoto" name="filename" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
            <div class="a-row">
              Already Registered?
              <a class="a-link-emphasis" href="login.html">
                Login
              </a>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="seller" role="tabpanel">
          <h3>Sign up as Artist</h3>
          <form action="artsignup.php" method="post">
            <div class="mb-3">
              <label for="sellerName" class="form-label">Name</label>
              <input type="text" class="form-control" id="sellerName" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label for="sellerEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="sellerEmail" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="sellerPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="sellerPassword" placeholder="Enter a password" required>
            </div>
            <div class="mb-3">
              <label for="sellerPhone" class="form-label">Mobile Number</label>
              <input type="tel" class="form-control" id="sellerPhone" placeholder="Mobile Number" required>
            </div>

            
            <div class="mb-3">
              <label for="sellerCategory" class="form-label">Category</label>
              <select class="form-control" id="sellerCategory" required>
                <option value="">Select a category</option>
                <option value="category1">OTHERS</option>
                <option value="category2">Aani peeni</option>
                <option value="category3">Aanjaneyana vesha</option>
                <option value="category4">Aasaadhi kunitha</option>
                <option value="category5">Aati kalenja</option>
                <option value="category6">Alaavi kunitha</option>
                <option value="category7">Alaayi hejje</option>
                <option value="category8">Antige pantige</option>
                <option value="category9">Anubandha</option>
                <option value="category10">Baale saanthu</option>
                <option value="category11">Baarudi</option>
                <option value="category12">Bahuroopi veshagaararu</option>
                <option value="category13">Bajana baarod</option>
                <option value="category14">Bayalaatadha roopagalu</option>
                <option value="category15">Bedara kunitha</option>
                <option value="category16">Benki balukina kolaata</option>
                <option value="category17">Benki baraate</option>
                <option value="category18">Bhaagavanthike mela</option>
                <option value="category19">Bijali varase</option>
                <option value="category20">Bootharadhane</option>
                <option value="category21">Boothera kunitha</option>
                <option value="category22">Budubuduki</option>
                <option value="category23">Burra kathaa mela</option>
                <option value="category24">Bylabakudara sarpakola</option>
                <option value="category25">Chakra kolaata</option>
                <option value="category26">Chennu nalike</option>
                <option value="category27">Chikka mela</option>
                <option value="category28">Chit mela</option>
                <option value="category29">Choudammana kunitha</option>
                <option value="category30">Choudike</option>
                <option value="category31">Chunna</option>
                <option value="category32">Dhaasaraata</option>
                <option value="category33">Dhevan bulaav</option>
                <option value="category34">Dhevara nruthya</option>
                <option value="category35">Dhimsale kunitha</option>
                <option value="category36">Dhoddaata</option>
                <option value="category37">Dhombaraata</option>
                <option value="category38">Dhonne sidhramappana kunitha</option>
                <option value="category39">Dhurugu murugi</option>
                <option value="category40">Dollina kaipattu</option>
                <option value="category41">Dollu kunitha</option>
                <option value="category42">Erukola</option>
                <option value="category43">Gaarudigombe kunitha</option>
                <option value="category44">Gearkalla kunitha</option>
                <option value="category45">Gondara mandala kunitha</option>
                <option value="category46">Gondhaligara mela</option>
                <option value="category47">Goravara kunitha</option>
                <option value="category48">Gowligara kunithagalu</option>
                <option value="category49">Haalakki okkaligara gumatae paang</option>
                <option value="category50">Haalakki suggi kunitha</option>
                <option value="category51">Hagarana</option>
                <option value="category52">Hanneradu seragina kunitha</option>
                <option value="category53">Harige kunitha</option>
                <option value="category54">Hebbare  kunitha</option>
                <option value="category55">Hejje mela</option>
                <option value="category56">Helavaru</option>
                <option value="category57">Holi kunithagalu</option>
                <option value="category58">Holihalabu kunitha</option>
                <option value="category59">Holisigma kunitha</option>
                <option value="category60">Hoovina kolu</option>
                <option value="category61">Hoovina makkalu</option>
                <option value="category62">Howndheraayana vaalaga</option>
                <option value="category63">Huli vesha</option>
                <option value="category64">Iruligara kani</option>
                <option value="category65">Ithare aaradhanegalu</option>
                <option value="category66">Jaalaata</option>
                <option value="category67">Jadae kolaata</option>
                <option value="category68">Jaggalige</option>
                <option value="category69">Janapada rangabhoomi</option>
                <option value="category70">Janapada rangabhoomi kalegalu</option>
                <option value="category71">Jodi vesha</option>
                <option value="category72">Jogathi kunitha</option>
                <option value="category73">Jogi arasu</option>
                <option value="category74">Kaadiya  kunitha</option>
                <option value="category75">Kaadugollara gane padha</option>
                <option value="category76">Kaadyanaata</option>
                <option value="category77">Kaanthaka</option>
                <option value="category78">Kaase kunitha</option>
                <option value="category79">Kaavadi kunitha</option>
                <option value="category80">Kadga nruthya</option>
                <option value="category81">Kalegala akaaraadhi patti</option>
                <option value="category82">Kangilu kunitha</option>
                <option value="category83">Kannakadi</option>
                <option value="category84">Kansaale</option>
                <option value="category85">Karadi majalu</option>
                <option value="category86">Karadi vesha</option>
                <option value="category87">Karaga</option>
                <option value="category88">Karapala mela</option>
                <option value="category89">Karibevina soppina vesha</option>
                <option value="category90">Karongolu kunitha</option>
                <option value="category91">Katthi varase</option>
                <option value="category92">Keelukudhure kunitha</option>
                <option value="category93">Kelike</option>
                <option value="category94">Kinnari jogi mela</option>
                <option value="category95">Kodadha kunitha</option>
                <option value="category96">Kodavara kunithegalu</option>
                <option value="category97">Kolaata</option>
                <option value="category98">Kole basava</option>
                <option value="category99">Kombu kahale</option>
                <option value="category100">Konana kunitha</option>
                <option value="category101">Kondamaama</option>
                <option value="category102">Koragara kunithegalu</option>
                <option value="category103">Koravanji  kolaata</option>
                <option value="category104">Koravanji</option>
                <option value="category105">Kshethra sahaayakara vivara</option>
                <option value="category106">Kudhure kola</option>
                <option value="category107">Kudiyar̥a kunitha</option>
                <option value="category108">Kudubi marati holi kunitha</option>
                <option value="category109">Kudubiyara kunitha</option>
                <option value="category110">Kulenalike</option>
                <option value="category111">Kurubara dhatti aata</option>
                <option value="category112">Laavani sampradhaaya</option>
                <option value="category113">Lambaani kunitha</option>
                <option value="category114">Maadhira nalike</option>
                <option value="category115">Maankaali kunitha</option>
                <option value="category116">Maari kunitha</option>
                <option value="category117">Maariya aaradhane</option>
                <option value="category118">Maastikara pogadu bommalaata</option>
                <option value="category119">Maayammana kunitha</option>
                <option value="category120">Maayidha purushe</option>
                <option value="category121">Madhimmaya madhimmal kunitha</option>
                <option value="category122">Maleraayana pooje matthu kunitha</option>
                <option value="category123">Mallemaadheshwara matthu mante swaami aaradhane</option>
                <option value="category124">Maraatigala gummate kunitha</option>
                <option value="category125">Maragaalu kunitha</option>
                <option value="category126">Mardh bedan</option>
                <option value="category127">Merara dhudi kunitha</option>
                <option value="category128">Modi aata</option>
                <option value="category129">Moharam aaradhane</option>
                <option value="category130">Moharam kunitha</option>
                <option value="category131">Moodalapaaya bayalaata</option>
                <option value="category132">Mylaaralingana aaradhane</option>
                <option value="category133">Naagamandala</option>
                <option value="category134">Naagana kola</option>
                <option value="category135">Naagaradhane</option>
                <option value="category136">Nagaari</option>
                <option value="category137">Nalkeyavara koraga thaniya</option>
                <option value="category138">Nandhidhwaja kunitha</option>
                <option value="category139">Neelagara mela</option>
                <option value="category140">Nruttha matthu kaalaata kunitha</option>
                <option value="category141">Oddara kunitha</option>
                <option value="category142">Paallegaarana vesha</option>
                <option value="category143">Paanara swaamikola</option>
                <option value="category144">Paanaraata</option>
                <option value="category145">Panjina kunitha</option>
                <option value="category146">Paraamarshana granthasoochi</option>
                <option value="category147">Pataa kunitha</option>
                <option value="category148">Pilapanji kunitha</option>
                <option value="category149">Pooja kunitha</option>
                <option value="category150">Pretha kunitha</option>
                <option value="category151">Puravanthike</option>
                <option value="category152">Raadhaanaata</option>
                <option value="category153">Rangadha kunitha</option>
                <option value="category154">Saamskruthika padhakosha</option>
                <option value="category155">Samruddhi haagu phalavanthike aacharaneya kalegalu</option>
                <option value="category156">Sankeerna kalegalu</option>
                <option value="category157">Sannaatagalu</option>
                <option value="category158">Sarpamkala</option>
                <option value="category159">Sharanaraata</option>
                <option value="category160">Shasthra kunitha</option>
                <option value="category161">Shri krishna paarijaatha</option>
                <option value="category162">Siddha vesha</option>
                <option value="category163">Siddhiki siddhi</option>
                <option value="category164">Siddhiyara kunithagalu</option>
                <option value="category165">Sindh maadhigara sindh kunitha</option>
                <option value="category166">Somana kunitha</option>
                <option value="category167">Sonadha jogi</option>
                <option value="category168">Soothradha gombeyaata</option>
                <option value="category169">Sudugaadu siddhara kaichalakadha aata</option>
                <option value="category170">Thaalamaddhale</option>
                <option value="category171">Thaaluppoli</option>
                <option value="category172">Thamate vaadhana</option>
                <option value="category173">Thamburi,bajane sampradhaya</option>
                <option value="category174">Tharle kunitha</option>
                <option value="category175">Thogalu gombeyaata</option>
                <option value="category176">Thulasi nruthya</option>
                <option value="category177">Urume vaadhana</option>
                <option value="category178">Vaage murali</option>
                <option value="category179">Varna chaayachithragala vivara</option>
                <option value="category180">Veerabhadhrana aaradhane</option>
                <option value="category181">Veerabhadhrana kunitha</option>
                <option value="category182">Veeragaase</option>
                <option value="category183">Veeramakkala kunitha</option>
                <option value="category184">Vishayasoochi</option>
                <option value="category185">Vishesha janavargagala matthu budakattugala kelavu kalegalu</option>
                <option value="category186">Yakshagaana</option>
                <option value="category187">Yallammana aaradhane</option>
                <option value="category188">Yaravara kunitha</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="sellerothers" class="form-label">If Others please specify</label>
              <input type="text" class="form-control" id="sellerothers" placeholder="Others*" >
            </div>
            <button type="submit" class="btn btn-primary" formaction="artistdetails.html" >Next</button>
            <div class="a-row">
              Already Registered?
              <a class="a-link-emphasis" href="login.html">
                Login
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="picture">
      <img src="image/su1.png" alt="Your Picture" style="max-width: 100%; max-height: 100%;">
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>




<!-- INSERT INTO `artreg` (`slno`, `Name`, `Email`, `Password`, `mobileno`, `category`, `others`, `address`, `postal code`, `occupation`, `Experience`, `DOB`, `Aadhar No.`, `PAN`, `Acc Name`, `Acc no`, `Branch Name`, `IFSC code`) VALUES ('1', 'satyam rao', 'satyam@gamil.com', 'lijunsdk', '7894561230', 'singer', 'bkjsbkjas', 'jbsbdsabjhjhbc', '456123', 'singer', '02', '2002-10-11', '789456120369', '456123074', 'satyam', '78945612', 'kengeri', '789456'); -->