@extends('layouts.master')

@section('content')
    <div class="container">
        <div data-tg-refresh="checkout" id="checkout" class="content" data-select2-id="select2-data-checkout">
            <form id="checkoutForm" method="post">
                <input type="hidden" name="_method" value="patch">
                <div class="wrap" data-select2-id="select2-data-422-qv5x">
                    <main class="main">
                        <header class="main__header">
                            <div class="logo logo--left">
                                <a href="/">
                                    <img class="logo__image  logo__image--small " alt="0907710771"
                                        src="//bizweb.dktcdn.net/100/189/969/themes/513705/assets/checkout_logo.png?1646555996831">
                                </a>
                            </div>
                        </header>
                        <div class="main__content" data-select2-id="select2-data-421-nl14">
                            <article class="animate-floating-labels row">
                                <div class="col col--two">
                                    <section class="section" data-select2-id="select2-data-420-lxdi">
                                        <div class="section__header">
                                            <div class="layout-flex">
                                                <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                    <i
                                                        class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>

                                                    Thông tin mua hàng

                                                </h2>
                                            </div>
                                        </div>
                                        <div class="section__content" data-select2-id="select2-data-419-2sy2">
                                            <div class="fieldset">
                                                <div class="field " data-bind-class="{'field--show-floating-label': email}">
                                                    <div class="field__input-wrapper">
                                                        <label for="email" class="field__label">
                                                            Email
                                                        </label>
                                                        <input name="email" id="email" type="email"
                                                            class="field__input" data-bind="email" value="">
                                                    </div>

                                                </div>



                                                <div class="field "
                                                    data-bind-class="{'field--show-floating-label': billing.name}">
                                                    <div class="field__input-wrapper">
                                                        <label for="billingName" class="field__label">Họ và tên</label>
                                                        <input name="billingName" id="billingName" type="text"
                                                            class="field__input" data-bind="billing.name" value="">
                                                    </div>

                                                </div>

                                                <div class="field "
                                                    data-bind-class="{'field--show-floating-label': billing.phone}">
                                                    <div class="field__input-wrapper field__input-wrapper--connected"
                                                        data-define="{phoneInput: new InputPhone(this)}"
                                                        data-select2-id="select2-data-418-2vhc">
                                                        <label for="billingPhone" class="field__label">
                                                            Số điện thoại (tùy chọn)
                                                        </label>
                                                        <input name="billingPhone" id="billingPhone" type="tel"
                                                            class="field__input" data-bind="billing.phone" value="">
                                                        {{-- <div class="field__input-phone-region-wrapper">
                                                            <select
                                                                class="field__input select-phone-region select2-hidden-accessible"
                                                                name="billingPhoneRegion" data-init-value="VN"
                                                                data-select2-id="select2-data-5-59ke" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option value="AF"
                                                                    data-select2-id="select2-data-7-bsu0">Afghanistan (+93)
                                                                </option>
                                                                <option value="AL"
                                                                    data-select2-id="select2-data-8-u46k">Albania (+355)
                                                                </option>
                                                                <option value="DZ"
                                                                    data-select2-id="select2-data-9-q5cz">Algeria (+213)
                                                                </option>
                                                                <option value="AD"
                                                                    data-select2-id="select2-data-10-bkbr">Andorra (+376)
                                                                </option>
                                                                <option value="AO"
                                                                    data-select2-id="select2-data-11-mzmq">Angola (+244)
                                                                </option>
                                                                <option value="AG"
                                                                    data-select2-id="select2-data-12-kedt">Antigua and
                                                                    Barbuda (+1)</option>
                                                                <option value="AR"
                                                                    data-select2-id="select2-data-13-112a">Argentina (+54)
                                                                </option>
                                                                <option value="AM"
                                                                    data-select2-id="select2-data-14-7m5a">Armenia (+374)
                                                                </option>
                                                                <option value="AU"
                                                                    data-select2-id="select2-data-15-wvuw">Australia (+61)
                                                                </option>
                                                                <option value="AT"
                                                                    data-select2-id="select2-data-16-khhs">Austria (+43)
                                                                </option>
                                                                <option value="AZ"
                                                                    data-select2-id="select2-data-17-4whb">Azerbaijan
                                                                    (+994)</option>
                                                                <option value="BS"
                                                                    data-select2-id="select2-data-18-gx2e">Bahamas (+1)
                                                                </option>
                                                                <option value="BH"
                                                                    data-select2-id="select2-data-19-fal5">Bahrain (+973)
                                                                </option>
                                                                <option value="BD"
                                                                    data-select2-id="select2-data-20-q118">Bangladesh
                                                                    (+880)</option>
                                                                <option value="BB"
                                                                    data-select2-id="select2-data-21-ia1e">Barbados (+1)
                                                                </option>
                                                                <option value="BY"
                                                                    data-select2-id="select2-data-22-wgj6">Belarus (+375)
                                                                </option>
                                                                <option value="BE"
                                                                    data-select2-id="select2-data-23-dpve">Belgium (+32)
                                                                </option>
                                                                <option value="BZ"
                                                                    data-select2-id="select2-data-24-5fml">Belize (+501)
                                                                </option>
                                                                <option value="BJ"
                                                                    data-select2-id="select2-data-25-pfp9">Benin (+229)
                                                                </option>
                                                                <option value="BT"
                                                                    data-select2-id="select2-data-26-dvb1">Bhutan (+975)
                                                                </option>
                                                                <option value="BO"
                                                                    data-select2-id="select2-data-27-euq6">Bolivia (+591)
                                                                </option>
                                                                <option value="BA"
                                                                    data-select2-id="select2-data-28-jcis">Bosnia and
                                                                    Herzegovina (+387)</option>
                                                                <option value="BW"
                                                                    data-select2-id="select2-data-29-9tix">Botswana (+267)
                                                                </option>
                                                                <option value="BR"
                                                                    data-select2-id="select2-data-30-ypff">Brazil (+55)
                                                                </option>
                                                                <option value="BN"
                                                                    data-select2-id="select2-data-31-y3hj">Brunei (+673)
                                                                </option>
                                                                <option value="BG"
                                                                    data-select2-id="select2-data-32-xl8b">Bulgaria (+359)
                                                                </option>
                                                                <option value="BF"
                                                                    data-select2-id="select2-data-33-mdkp">Burkina Faso
                                                                    (+226)</option>
                                                                <option value="BI"
                                                                    data-select2-id="select2-data-34-skkg">Burundi (+257)
                                                                </option>
                                                                <option value="KH"
                                                                    data-select2-id="select2-data-35-s95o">Cambodia (+855)
                                                                </option>
                                                                <option value="CM"
                                                                    data-select2-id="select2-data-36-vvqn">Cameroon (+237)
                                                                </option>
                                                                <option value="CA"
                                                                    data-select2-id="select2-data-37-7zow">Canada (+1)
                                                                </option>
                                                                <option value="CV"
                                                                    data-select2-id="select2-data-38-wyyi">Cape Verde
                                                                    (+238)</option>
                                                                <option value="CF"
                                                                    data-select2-id="select2-data-39-dpzf">Central African
                                                                    Republic (+236)</option>
                                                                <option value="TD"
                                                                    data-select2-id="select2-data-40-12ff">Chad (+235)
                                                                </option>
                                                                <option value="CL"
                                                                    data-select2-id="select2-data-41-5kql">Chile (+56)
                                                                </option>
                                                                <option value="CO"
                                                                    data-select2-id="select2-data-42-k8sm">Colombia (+57)
                                                                </option>
                                                                <option value="KM"
                                                                    data-select2-id="select2-data-43-joeo">Comoros (+269)
                                                                </option>
                                                                <option value="CG"
                                                                    data-select2-id="select2-data-44-etm0">
                                                                    Congo-Brazzaville (+242)</option>
                                                                <option value="CK"
                                                                    data-select2-id="select2-data-45-i8ko">Congo-Kinshasa
                                                                    (+682)</option>
                                                                <option value="CR"
                                                                    data-select2-id="select2-data-46-2dbr">Costa Rica
                                                                    (+506)</option>
                                                                <option value="CD"
                                                                    data-select2-id="select2-data-47-dat8">Côte d'Ivoire
                                                                    (+243)</option>
                                                                <option value="HR"
                                                                    data-select2-id="select2-data-48-c7dz">Croatia (+385)
                                                                </option>
                                                                <option value="CU"
                                                                    data-select2-id="select2-data-49-k69m">Cuba (+53)
                                                                </option>
                                                                <option value="CY"
                                                                    data-select2-id="select2-data-50-bice">Cyprus (+357)
                                                                </option>
                                                                <option value="CZ"
                                                                    data-select2-id="select2-data-51-5s2n">Czech Republic
                                                                    (+420)</option>
                                                                <option value="DK"
                                                                    data-select2-id="select2-data-52-p6z1">Denmark (+45)
                                                                </option>
                                                                <option value="DJ"
                                                                    data-select2-id="select2-data-53-u4sl">Djibouti (+253)
                                                                </option>
                                                                <option value="DM"
                                                                    data-select2-id="select2-data-54-9g86">Dominica (+1)
                                                                </option>
                                                                <option value="DO"
                                                                    data-select2-id="select2-data-55-oudx">Dominican
                                                                    Republic (+1)</option>
                                                                <option value="TL"
                                                                    data-select2-id="select2-data-56-it0l">East Timor
                                                                    (+670)</option>
                                                                <option value="EC"
                                                                    data-select2-id="select2-data-57-x69z">Ecuador (+593)
                                                                </option>
                                                                <option value="EG"
                                                                    data-select2-id="select2-data-58-s5bt">Egypt (+20)
                                                                </option>
                                                                <option value="SV"
                                                                    data-select2-id="select2-data-59-1mbf">El Salvador
                                                                    (+503)</option>
                                                                <option value="GQ"
                                                                    data-select2-id="select2-data-60-xf2o">Equatorial
                                                                    Guinea (+240)</option>
                                                                <option value="ER"
                                                                    data-select2-id="select2-data-61-atl1">Eritrea (+291)
                                                                </option>
                                                                <option value="EE"
                                                                    data-select2-id="select2-data-62-dsmr">Estonia (+372)
                                                                </option>
                                                                <option value="ET"
                                                                    data-select2-id="select2-data-63-u6g2">Ethiopia (+251)
                                                                </option>
                                                                <option value="FJ"
                                                                    data-select2-id="select2-data-64-i0zm">Fiji (+679)
                                                                </option>
                                                                <option value="FI"
                                                                    data-select2-id="select2-data-65-yim9">Finland (+358)
                                                                </option>
                                                                <option value="FR"
                                                                    data-select2-id="select2-data-66-5xep">France (+33)
                                                                </option>
                                                                <option value="GA"
                                                                    data-select2-id="select2-data-67-g4iw">Gabon (+241)
                                                                </option>
                                                                <option value="GM"
                                                                    data-select2-id="select2-data-68-y3t4">Gambia (+220)
                                                                </option>
                                                                <option value="GE"
                                                                    data-select2-id="select2-data-69-o0gk">Georgia (+995)
                                                                </option>
                                                                <option value="DE"
                                                                    data-select2-id="select2-data-70-941r">Germany (+49)
                                                                </option>
                                                                <option value="GH"
                                                                    data-select2-id="select2-data-71-0no4">Ghana (+233)
                                                                </option>
                                                                <option value="GR"
                                                                    data-select2-id="select2-data-72-9hj8">Greece (+30)
                                                                </option>
                                                                <option value="GD"
                                                                    data-select2-id="select2-data-73-5pc6">Grenada (+1)
                                                                </option>
                                                                <option value="GT"
                                                                    data-select2-id="select2-data-74-ywif">Guatemala (+502)
                                                                </option>
                                                                <option value="GN"
                                                                    data-select2-id="select2-data-75-466h">Guinea (+224)
                                                                </option>
                                                                <option value="GW"
                                                                    data-select2-id="select2-data-76-xqlp">Guinea-Bissau
                                                                    (+245)</option>
                                                                <option value="GY"
                                                                    data-select2-id="select2-data-77-na81">Guyana (+592)
                                                                </option>
                                                                <option value="HT"
                                                                    data-select2-id="select2-data-78-qb5u">Haiti (+509)
                                                                </option>
                                                                <option value="HN"
                                                                    data-select2-id="select2-data-79-72cr">Honduras (+504)
                                                                </option>
                                                                <option value="HK"
                                                                    data-select2-id="select2-data-80-40o9">Hong Kong (+852)
                                                                </option>
                                                                <option value="HU"
                                                                    data-select2-id="select2-data-81-0t3r">Hungary (+36)
                                                                </option>
                                                                <option value="IS"
                                                                    data-select2-id="select2-data-82-f38r">Iceland (+354)
                                                                </option>
                                                                <option value="IN"
                                                                    data-select2-id="select2-data-83-nk0h">India (+91)
                                                                </option>
                                                                <option value="ID"
                                                                    data-select2-id="select2-data-84-hp25">Indonesia (+62)
                                                                </option>
                                                                <option value="IR"
                                                                    data-select2-id="select2-data-85-dnch">Iran (+98)
                                                                </option>
                                                                <option value="IQ"
                                                                    data-select2-id="select2-data-86-9mm4">Iraq (+964)
                                                                </option>
                                                                <option value="IE"
                                                                    data-select2-id="select2-data-87-lvi1">Ireland (+353)
                                                                </option>
                                                                <option value="IL"
                                                                    data-select2-id="select2-data-88-pqtn">Israel (+972)
                                                                </option>
                                                                <option value="IT"
                                                                    data-select2-id="select2-data-89-bwai">Italy (+39)
                                                                </option>
                                                                <option value="JM"
                                                                    data-select2-id="select2-data-90-7c9a">Jamaica (+1)
                                                                </option>
                                                                <option value="JP"
                                                                    data-select2-id="select2-data-91-qotp">Japan (Nippon)
                                                                    (+81)</option>
                                                                <option value="JO"
                                                                    data-select2-id="select2-data-92-u98r">Jordan (+962)
                                                                </option>
                                                                <option value="KZ"
                                                                    data-select2-id="select2-data-93-sf3r">Kazakhstan (+7)
                                                                </option>
                                                                <option value="KE"
                                                                    data-select2-id="select2-data-94-v252">Kenya (+254)
                                                                </option>
                                                                <option value="KI"
                                                                    data-select2-id="select2-data-95-g0n3">Kiribati (+686)
                                                                </option>
                                                                <option value="KP"
                                                                    data-select2-id="select2-data-96-lbye">North Korea
                                                                    (+850)</option>
                                                                <option value="XK"
                                                                    data-select2-id="select2-data-97-j1wp">Kosovo (+383)
                                                                </option>
                                                                <option value="KW"
                                                                    data-select2-id="select2-data-98-r5ot">Kuwait (+965)
                                                                </option>
                                                                <option value="KG"
                                                                    data-select2-id="select2-data-99-1vbw">Kyrgyzstan
                                                                    (+996)</option>
                                                                <option value="LA"
                                                                    data-select2-id="select2-data-100-1ikh">Laos (+856)
                                                                </option>
                                                                <option value="LV"
                                                                    data-select2-id="select2-data-101-wz5b">Latvia (+371)
                                                                </option>
                                                                <option value="LB"
                                                                    data-select2-id="select2-data-102-8y4x">Lebanon (+961)
                                                                </option>
                                                                <option value="LS"
                                                                    data-select2-id="select2-data-103-ovgd">Lesotho (+266)
                                                                </option>
                                                                <option value="LR"
                                                                    data-select2-id="select2-data-104-n3c8">Liberia (+231)
                                                                </option>
                                                                <option value="LY"
                                                                    data-select2-id="select2-data-105-vjto">Libya (+218)
                                                                </option>
                                                                <option value="LI"
                                                                    data-select2-id="select2-data-106-2x4r">Liechtenstein
                                                                    (+423)</option>
                                                                <option value="LT"
                                                                    data-select2-id="select2-data-107-yesa">Lithuania
                                                                    (+370)</option>
                                                                <option value="LU"
                                                                    data-select2-id="select2-data-108-u472">Luxembourg
                                                                    (+352)</option>
                                                                <option value="MK"
                                                                    data-select2-id="select2-data-109-cwx4">Macedonia
                                                                    (FYROM) (+389)</option>
                                                                <option value="MG"
                                                                    data-select2-id="select2-data-110-3vga">Madagascar
                                                                    (+261)</option>
                                                                <option value="MW"
                                                                    data-select2-id="select2-data-111-caoa">Malawi (+265)
                                                                </option>
                                                                <option value="MY"
                                                                    data-select2-id="select2-data-112-bpab">Malaysia (+60)
                                                                </option>
                                                                <option value="MV"
                                                                    data-select2-id="select2-data-113-4x4n">Maldives (+960)
                                                                </option>
                                                                <option value="ML"
                                                                    data-select2-id="select2-data-114-pj9u">Mali (+223)
                                                                </option>
                                                                <option value="MT"
                                                                    data-select2-id="select2-data-115-7k33">Malta (+356)
                                                                </option>
                                                                <option value="MH"
                                                                    data-select2-id="select2-data-116-6sk7">Marshall
                                                                    Islands (+692)</option>
                                                                <option value="MR"
                                                                    data-select2-id="select2-data-117-h6az">Mauritania
                                                                    (+222)</option>
                                                                <option value="MU"
                                                                    data-select2-id="select2-data-118-rkg3">Mauritius
                                                                    (+230)</option>
                                                                <option value="MX"
                                                                    data-select2-id="select2-data-119-03o2">Mexico (+52)
                                                                </option>
                                                                <option value="FM"
                                                                    data-select2-id="select2-data-120-b7n7">Micronesia
                                                                    (+691)</option>
                                                                <option value="MD"
                                                                    data-select2-id="select2-data-121-fgeg">Moldova (+373)
                                                                </option>
                                                                <option value="MC"
                                                                    data-select2-id="select2-data-122-bval">Monaco (+377)
                                                                </option>
                                                                <option value="MN"
                                                                    data-select2-id="select2-data-123-2hps">Mongolia (+976)
                                                                </option>
                                                                <option value="ME"
                                                                    data-select2-id="select2-data-124-rres">Montenegro
                                                                    (+382)</option>
                                                                <option value="MA"
                                                                    data-select2-id="select2-data-125-7zei">Morocco (+212)
                                                                </option>
                                                                <option value="MZ"
                                                                    data-select2-id="select2-data-126-n6ms">Mozambique
                                                                    (+258)</option>
                                                                <option value="MM"
                                                                    data-select2-id="select2-data-127-zl1b">Myanmar (+95)
                                                                </option>
                                                                <option value="NA"
                                                                    data-select2-id="select2-data-128-jlsx">Namibia (+264)
                                                                </option>
                                                                <option value="NR"
                                                                    data-select2-id="select2-data-129-grqy">Nauru (+674)
                                                                </option>
                                                                <option value="NP"
                                                                    data-select2-id="select2-data-130-v3rq">Nepal (+977)
                                                                </option>
                                                                <option value="NL"
                                                                    data-select2-id="select2-data-131-u6p3">Netherlands
                                                                    (+31)</option>
                                                                <option value="NZ"
                                                                    data-select2-id="select2-data-132-lo7j">New Zealand
                                                                    (+64)</option>
                                                                <option value="NI"
                                                                    data-select2-id="select2-data-133-qc4m">Nicaragua
                                                                    (+505)</option>
                                                                <option value="NE"
                                                                    data-select2-id="select2-data-134-db5e">Niger (+227)
                                                                </option>
                                                                <option value="NG"
                                                                    data-select2-id="select2-data-135-h48m">Nigeria (+234)
                                                                </option>
                                                                <option value="KR"
                                                                    data-select2-id="select2-data-136-fyfg">South Korea
                                                                    (+82)</option>
                                                                <option value="NC"
                                                                    data-select2-id="select2-data-137-xmyt">New Caledonia
                                                                    (+687)</option>
                                                                <option value="NO"
                                                                    data-select2-id="select2-data-138-e70z">Norway (+47)
                                                                </option>
                                                                <option value="OM"
                                                                    data-select2-id="select2-data-139-6z5q">Oman (+968)
                                                                </option>
                                                                <option value="PK"
                                                                    data-select2-id="select2-data-140-ydcl">Pakistan (+92)
                                                                </option>
                                                                <option value="PW"
                                                                    data-select2-id="select2-data-141-askv">Palau (+680)
                                                                </option>
                                                                <option value="PS"
                                                                    data-select2-id="select2-data-142-hsej">Palestine
                                                                    (+970)</option>
                                                                <option value="PA"
                                                                    data-select2-id="select2-data-143-8y3z">Panama (+507)
                                                                </option>
                                                                <option value="PG"
                                                                    data-select2-id="select2-data-144-ijnf">Papua New
                                                                    Guinea (+675)</option>
                                                                <option value="PY"
                                                                    data-select2-id="select2-data-145-7a1q">Paraguay (+595)
                                                                </option>
                                                                <option value="PE"
                                                                    data-select2-id="select2-data-146-o6fd">Peru (+51)
                                                                </option>
                                                                <option value="PH"
                                                                    data-select2-id="select2-data-147-nhsh">Philippines
                                                                    (+63)</option>
                                                                <option value="PL"
                                                                    data-select2-id="select2-data-148-mcos">Poland (+48)
                                                                </option>
                                                                <option value="PT"
                                                                    data-select2-id="select2-data-149-xtyu">Portugal (+351)
                                                                </option>
                                                                <option value="QA"
                                                                    data-select2-id="select2-data-150-pcnk">Qatar (+974)
                                                                </option>
                                                                <option value="RO"
                                                                    data-select2-id="select2-data-151-jo7o">Romania (+40)
                                                                </option>
                                                                <option value="RU"
                                                                    data-select2-id="select2-data-152-k1rf">Russia (+7)
                                                                </option>
                                                                <option value="RW"
                                                                    data-select2-id="select2-data-153-rrjr">Rwanda (+250)
                                                                </option>
                                                                <option value="KN"
                                                                    data-select2-id="select2-data-154-avrm">Saint Kitts and
                                                                    Nevis (+1)</option>
                                                                <option value="LC"
                                                                    data-select2-id="select2-data-155-db07">Saint Lucia
                                                                    (+1)</option>
                                                                <option value="VC"
                                                                    data-select2-id="select2-data-156-vddk">Saint Vincent
                                                                    and the Grenadines (+1)</option>
                                                                <option value="WS"
                                                                    data-select2-id="select2-data-157-uilw">Samoa (+685)
                                                                </option>
                                                                <option value="SM"
                                                                    data-select2-id="select2-data-158-j732">San Marino
                                                                    (+378)</option>
                                                                <option value="ST"
                                                                    data-select2-id="select2-data-159-srx9">Sao Tome and
                                                                    Principe (+239)</option>
                                                                <option value="SA"
                                                                    data-select2-id="select2-data-160-0k29">Saudi Arabia
                                                                    (+966)</option>
                                                                <option value="SS"
                                                                    data-select2-id="select2-data-161-uyio">South Sudan
                                                                    (+211)</option>
                                                                <option value="SN"
                                                                    data-select2-id="select2-data-162-q9jv">Senegal (+221)
                                                                </option>
                                                                <option value="RS"
                                                                    data-select2-id="select2-data-163-n9wd">Serbia (+381)
                                                                </option>
                                                                <option value="SC"
                                                                    data-select2-id="select2-data-164-f16t">Seychelles
                                                                    (+248)</option>
                                                                <option value="SL"
                                                                    data-select2-id="select2-data-165-dmyi">Sierra Leone
                                                                    (+232)</option>
                                                                <option value="SG"
                                                                    data-select2-id="select2-data-166-8uxv">Singapore (+65)
                                                                </option>
                                                                <option value="SH"
                                                                    data-select2-id="select2-data-167-y2hi">Saint Helena
                                                                    (+290)</option>
                                                                <option value="SK"
                                                                    data-select2-id="select2-data-168-7ruc">Slovakia (+421)
                                                                </option>
                                                                <option value="SI"
                                                                    data-select2-id="select2-data-169-k9qz">Slovenia (+386)
                                                                </option>
                                                                <option value="SB"
                                                                    data-select2-id="select2-data-170-tngs">Solomon Islands
                                                                    (+677)</option>
                                                                <option value="SO"
                                                                    data-select2-id="select2-data-171-akz0">Somalia (+252)
                                                                </option>
                                                                <option value="SJ"
                                                                    data-select2-id="select2-data-172-38e8">Svalbard and
                                                                    Jan Mayen (+47)</option>
                                                                <option value="ZA"
                                                                    data-select2-id="select2-data-173-l6um">South Africa
                                                                    (+27)</option>
                                                                <option value="ES"
                                                                    data-select2-id="select2-data-174-4v8m">Spain (+34)
                                                                </option>
                                                                <option value="LK"
                                                                    data-select2-id="select2-data-175-v5ik">Sri Lanka (+94)
                                                                </option>
                                                                <option value="SD"
                                                                    data-select2-id="select2-data-176-sq2p">Sudan (+249)
                                                                </option>
                                                                <option value="SR"
                                                                    data-select2-id="select2-data-177-bc3m">Suriname (+597)
                                                                </option>
                                                                <option value="SZ"
                                                                    data-select2-id="select2-data-178-g0do">Swaziland
                                                                    (+268)</option>
                                                                <option value="SE"
                                                                    data-select2-id="select2-data-179-b3hv">Sweden (+46)
                                                                </option>
                                                                <option value="CH"
                                                                    data-select2-id="select2-data-180-tdny">Switzerland
                                                                    (+41)</option>
                                                                <option value="SY"
                                                                    data-select2-id="select2-data-181-ygh8">Syria (+963)
                                                                </option>
                                                                <option value="TJ"
                                                                    data-select2-id="select2-data-182-jtl4">Tajikistan
                                                                    (+992)</option>
                                                                <option value="TZ"
                                                                    data-select2-id="select2-data-183-v3mv">Tanzania (+255)
                                                                </option>
                                                                <option value="TH"
                                                                    data-select2-id="select2-data-184-yzza">Thailand (+66)
                                                                </option>
                                                                <option value="TG"
                                                                    data-select2-id="select2-data-185-qur4">Togo (+228)
                                                                </option>
                                                                <option value="TO"
                                                                    data-select2-id="select2-data-186-xmzf">Tonga (+676)
                                                                </option>
                                                                <option value="TK"
                                                                    data-select2-id="select2-data-187-gx5k">Tokelau (+690)
                                                                </option>
                                                                <option value="TT"
                                                                    data-select2-id="select2-data-188-hfpm">Trinidad and
                                                                    Tobago (+1)</option>
                                                                <option value="TN"
                                                                    data-select2-id="select2-data-189-r3yb">Tunisia (+216)
                                                                </option>
                                                                <option value="TR"
                                                                    data-select2-id="select2-data-190-pl7w">Turkey (+90)
                                                                </option>
                                                                <option value="CN"
                                                                    data-select2-id="select2-data-191-uyqa">China (+86)
                                                                </option>
                                                                <option value="TM"
                                                                    data-select2-id="select2-data-192-4ipu">Turkmenistan
                                                                    (+993)</option>
                                                                <option value="TV"
                                                                    data-select2-id="select2-data-193-gtta">Tuvalu (+688)
                                                                </option>
                                                                <option value="UG"
                                                                    data-select2-id="select2-data-194-8kty">Uganda (+256)
                                                                </option>
                                                                <option value="UA"
                                                                    data-select2-id="select2-data-195-6z73">Ukraine (+380)
                                                                </option>
                                                                <option value="AE"
                                                                    data-select2-id="select2-data-196-kkt8">United Arab
                                                                    Emirates (+971)</option>
                                                                <option value="GB"
                                                                    data-select2-id="select2-data-197-19ym">United Kingdom
                                                                    (+44)</option>
                                                                <option value="US"
                                                                    data-select2-id="select2-data-198-bm30">United States
                                                                    (+1)</option>
                                                                <option value="UY"
                                                                    data-select2-id="select2-data-199-t9rt">Uruguay (+598)
                                                                </option>
                                                                <option value="UZ"
                                                                    data-select2-id="select2-data-200-5da5">Uzbekistan
                                                                    (+998)</option>
                                                                <option value="VU"
                                                                    data-select2-id="select2-data-201-eu7j">Vanuatu (+678)
                                                                </option>
                                                                <option value="VA"
                                                                    data-select2-id="select2-data-202-ty2g">Vatican (+39)
                                                                </option>
                                                                <option value="VE"
                                                                    data-select2-id="select2-data-203-m1f9">Venezuela (+58)
                                                                </option>
                                                                <option value="VN"
                                                                    data-select2-id="select2-data-204-cutg">Vietnam (+84)
                                                                </option>
                                                                <option value="EH"
                                                                    data-select2-id="select2-data-205-op42">Western Sahara
                                                                    (+212)</option>
                                                                <option value="YE"
                                                                    data-select2-id="select2-data-206-k5me">Yemen (+967)
                                                                </option>
                                                                <option value="ZM"
                                                                    data-select2-id="select2-data-207-01qm">Zambia (+260)
                                                                </option>
                                                                <option value="ZW"
                                                                    data-select2-id="select2-data-208-8t37">Zimbabwe (+263)
                                                                </option>
                                                                <option value="TW"
                                                                    data-select2-id="select2-data-209-wiu3">Taiwan (+886)
                                                                </option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--default select2-container--below select2-container--focus"
                                                                dir="ltr" data-select2-id="select2-data-6-vy3g"
                                                                style="width: 56px;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single select2-phone-region"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-billingPhoneRegion-cr-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-billingPhoneRegion-cr-container"
                                                                            role="textbox" aria-readonly="true"
                                                                            title="Vietnam (+84)"><span
                                                                                class="fi fi-vn"></span></span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                        </div> --}}
                                                    </div>

                                                </div>


                                                <div class="field "
                                                    data-bind-class="{'field--show-floating-label': billing.address}">
                                                    <div class="field__input-wrapper">
                                                        <label for="billingAddress" class="field__label">
                                                            Địa chỉ (tùy chọn)
                                                        </label>
                                                        <input name="billingAddress" id="billingAddress" type="text"
                                                            class="field__input" data-bind="billing.address"
                                                            value="">
                                                    </div>

                                                </div>


                                                <div class="field field--show-floating-label ">
                                                    <div class="field__input-wrapper field__input-wrapper--select2">
                                                        <label for="billingProvince" class="field__label">Tỉnh
                                                            thành</label>
                                                        <select name="billingProvince" id="billingProvince"
                                                            size="1"
                                                            class="field__input field__input--select select2-hidden-accessible"
                                                            data-bind="billing.province" value=""
                                                            data-address-type="province" data-address-zone="billing"
                                                            data-select2-id="select2-data-billingProvince" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="" hidden=""
                                                                data-select2-id="select2-data-415-35y2"></option>
                                                            <option value="1">Hà Nội</option>
                                                            <option value="2">TP Hồ Chí Minh</option>
                                                            <option value="3">An Giang</option>
                                                            <option value="4">Bà Rịa-Vũng Tàu</option>
                                                            <option value="5">Bắc Giang</option>
                                                            <option value="6">Bắc Kạn</option>
                                                            <option value="7">Bạc Liêu</option>
                                                            <option value="8">Bắc Ninh</option>
                                                            <option value="9">Bến Tre</option>
                                                            <option value="10">Bình Dương</option>
                                                            <option value="11">Bình Định</option>
                                                            <option value="12">Bình Phước</option>
                                                            <option value="13">Bình Thuận</option>
                                                            <option value="14">Cà Mau</option>
                                                            <option value="15">Cao Bằng</option>
                                                            <option value="16">Cần Thơ</option>
                                                            <option value="17">Đà Nẵng</option>
                                                            <option value="18">Đắk Lắk</option>
                                                            <option value="19">Đắk Nông</option>
                                                            <option value="20">Điện Biên</option>
                                                            <option value="21">Đồng Nai</option>
                                                            <option value="22">Đồng Tháp</option>
                                                            <option value="23">Gia Lai</option>
                                                            <option value="24">Hà Giang</option>
                                                            <option value="25">Hà Nam</option>
                                                            <option value="26">Hà Tĩnh</option>
                                                            <option value="27">Hải Dương</option>
                                                            <option value="28">Hải Phòng</option>
                                                            <option value="29">Hậu Giang</option>
                                                            <option value="30">Hòa Bình</option>
                                                            <option value="31">Hưng Yên</option>
                                                            <option value="32">Khánh Hòa</option>
                                                            <option value="33">Kiên Giang</option>
                                                            <option value="34">Kon Tum</option>
                                                            <option value="35">Lai Châu</option>
                                                            <option value="36">Lâm Đồng</option>
                                                            <option value="37">Lạng Sơn</option>
                                                            <option value="38">Lào Cai</option>
                                                            <option value="39">Long An</option>
                                                            <option value="40">Nam Định</option>
                                                            <option value="41">Nghệ An</option>
                                                            <option value="42">Ninh Bình</option>
                                                            <option value="43">Ninh Thuận</option>
                                                            <option value="44">Phú Thọ</option>
                                                            <option value="45">Phú Yên</option>
                                                            <option value="46">Quảng Bình</option>
                                                            <option value="47">Quảng Nam</option>
                                                            <option value="48">Quảng Ngãi</option>
                                                            <option value="49">Quảng Ninh</option>
                                                            <option value="50">Quảng Trị</option>
                                                            <option value="51">Sóc Trăng</option>
                                                            <option value="52">Sơn La</option>
                                                            <option value="53">Tây Ninh</option>
                                                            <option value="54">Thái Bình</option>
                                                            <option value="55">Thái Nguyên</option>
                                                            <option value="56">Thanh Hóa</option>
                                                            <option value="57">Thừa Thiên Huế</option>
                                                            <option value="58">Tiền Giang</option>
                                                            <option value="59">Trà Vinh</option>
                                                            <option value="60">Tuyên Quang</option>
                                                            <option value="61">Vĩnh Long</option>
                                                            <option value="62">Vĩnh Phúc</option>
                                                            <option value="63">Yên Bái</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" data-select2-id="select2-data-1-i3us"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-billingProvince-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-billingProvince-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="---"></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>

                                                </div>

                                                <div class="field field--show-floating-label ">
                                                    <div class="field__input-wrapper field__input-wrapper--select2">
                                                        <label for="billingDistrict" class="field__label">
                                                            Quận huyện (tùy chọn)
                                                        </label>
                                                        <select name="billingDistrict" id="billingDistrict"
                                                            size="1"
                                                            class="field__input field__input--select select2-hidden-accessible"
                                                            value="" data-bind="billing.district"
                                                            data-address-type="district" data-address-zone="billing"
                                                            data-select2-id="select2-data-billingDistrict" tabindex="-1"
                                                            aria-hidden="true" disabled="disabled"></select><span
                                                            class="select2 select2-container select2-container--default select2-container--disabled"
                                                            dir="ltr" data-select2-id="select2-data-2-duak"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="-1"
                                                                    aria-disabled="true"
                                                                    aria-labelledby="select2-billingDistrict-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-billingDistrict-container"
                                                                        role="textbox" aria-readonly="true"></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>

                                                </div>




                                                <div class="field">
                                                    <div class="checkbox-wrapper">
                                                        <div class="checkbox__input">
                                                            <input type="checkbox" name="differenceAddress"
                                                                id="differenceAddress" class="input-checkbox"
                                                                data-bind="differenceAddress" value="true"
                                                                data-toggle="#shipping-address"
                                                                data-toggle-class="visually-hidden">
                                                        </div>
                                                        <label for="differenceAddress" class="checkbox__label">
                                                            Giao hàng đến địa chỉ khác
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </section>

                                    <section class="section visually-hidden" id="shipping-address">
                                        <div class="section__header">
                                            <div class="layout-flex">
                                                <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                    <i
                                                        class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>
                                                    Thông tin nhận hàng
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="section__content">
                                            <div class="fieldset">
                                                <div class="field "
                                                    data-bind-class="{'field--show-floating-label': shipping.name}">
                                                    <div class="field__input-wrapper">
                                                        <label for="shippingName" class="field__label">Họ và tên</label>
                                                        <input name="shippingName" id="shippingName" type="text"
                                                            class="field__input" data-bind="shipping.name" value=""
                                                            tabindex="-1">
                                                    </div>

                                                </div>

                                                <div class="field "
                                                    data-bind-class="{'field--show-floating-label': shipping.phone}">
                                                    <div class="field__input-wrapper field__input-wrapper--connected"
                                                        data-define="{shippingPhoneInput: new InputPhone(this)}">
                                                        <label for="shippingPhone" class="field__label">
                                                            Số điện thoại (tùy chọn)
                                                        </label>
                                                        <input name="shippingPhone" id="shippingPhone" type="tel"
                                                            class="field__input" data-bind="shipping.phone"
                                                            value="" tabindex="-1">
                                                        <div class="field__input-phone-region-wrapper">
                                                            <select
                                                                class="field__input select-phone-region select2-hidden-accessible"
                                                                name="shippingPhoneRegion" data-init-value="VN"
                                                                data-select2-id="select2-data-210-3o5n" tabindex="-1"
                                                                aria-hidden="true">
                                                                <option value="AF"
                                                                    data-select2-id="select2-data-212-ztse">Afghanistan
                                                                    (+93)</option>
                                                                <option value="AL"
                                                                    data-select2-id="select2-data-213-55nc">Albania (+355)
                                                                </option>
                                                                <option value="DZ"
                                                                    data-select2-id="select2-data-214-i09s">Algeria (+213)
                                                                </option>
                                                                <option value="AD"
                                                                    data-select2-id="select2-data-215-77wl">Andorra (+376)
                                                                </option>
                                                                <option value="AO"
                                                                    data-select2-id="select2-data-216-vs53">Angola (+244)
                                                                </option>
                                                                <option value="AG"
                                                                    data-select2-id="select2-data-217-b45m">Antigua and
                                                                    Barbuda (+1)</option>
                                                                <option value="AR"
                                                                    data-select2-id="select2-data-218-kq9e">Argentina (+54)
                                                                </option>
                                                                <option value="AM"
                                                                    data-select2-id="select2-data-219-grwq">Armenia (+374)
                                                                </option>
                                                                <option value="AU"
                                                                    data-select2-id="select2-data-220-eni6">Australia (+61)
                                                                </option>
                                                                <option value="AT"
                                                                    data-select2-id="select2-data-221-x87d">Austria (+43)
                                                                </option>
                                                                <option value="AZ"
                                                                    data-select2-id="select2-data-222-kdcn">Azerbaijan
                                                                    (+994)</option>
                                                                <option value="BS"
                                                                    data-select2-id="select2-data-223-et3f">Bahamas (+1)
                                                                </option>
                                                                <option value="BH"
                                                                    data-select2-id="select2-data-224-2j8w">Bahrain (+973)
                                                                </option>
                                                                <option value="BD"
                                                                    data-select2-id="select2-data-225-r3q4">Bangladesh
                                                                    (+880)</option>
                                                                <option value="BB"
                                                                    data-select2-id="select2-data-226-1e2r">Barbados (+1)
                                                                </option>
                                                                <option value="BY"
                                                                    data-select2-id="select2-data-227-1lri">Belarus (+375)
                                                                </option>
                                                                <option value="BE"
                                                                    data-select2-id="select2-data-228-6c6l">Belgium (+32)
                                                                </option>
                                                                <option value="BZ"
                                                                    data-select2-id="select2-data-229-fao4">Belize (+501)
                                                                </option>
                                                                <option value="BJ"
                                                                    data-select2-id="select2-data-230-6m29">Benin (+229)
                                                                </option>
                                                                <option value="BT"
                                                                    data-select2-id="select2-data-231-13tx">Bhutan (+975)
                                                                </option>
                                                                <option value="BO"
                                                                    data-select2-id="select2-data-232-ps3i">Bolivia (+591)
                                                                </option>
                                                                <option value="BA"
                                                                    data-select2-id="select2-data-233-js3t">Bosnia and
                                                                    Herzegovina (+387)</option>
                                                                <option value="BW"
                                                                    data-select2-id="select2-data-234-6l5h">Botswana (+267)
                                                                </option>
                                                                <option value="BR"
                                                                    data-select2-id="select2-data-235-16m3">Brazil (+55)
                                                                </option>
                                                                <option value="BN"
                                                                    data-select2-id="select2-data-236-rbme">Brunei (+673)
                                                                </option>
                                                                <option value="BG"
                                                                    data-select2-id="select2-data-237-cu5i">Bulgaria (+359)
                                                                </option>
                                                                <option value="BF"
                                                                    data-select2-id="select2-data-238-jt2s">Burkina Faso
                                                                    (+226)</option>
                                                                <option value="BI"
                                                                    data-select2-id="select2-data-239-n5re">Burundi (+257)
                                                                </option>
                                                                <option value="KH"
                                                                    data-select2-id="select2-data-240-guwy">Cambodia (+855)
                                                                </option>
                                                                <option value="CM"
                                                                    data-select2-id="select2-data-241-t207">Cameroon (+237)
                                                                </option>
                                                                <option value="CA"
                                                                    data-select2-id="select2-data-242-fqqi">Canada (+1)
                                                                </option>
                                                                <option value="CV"
                                                                    data-select2-id="select2-data-243-cb40">Cape Verde
                                                                    (+238)</option>
                                                                <option value="CF"
                                                                    data-select2-id="select2-data-244-66j3">Central African
                                                                    Republic (+236)</option>
                                                                <option value="TD"
                                                                    data-select2-id="select2-data-245-iwsz">Chad (+235)
                                                                </option>
                                                                <option value="CL"
                                                                    data-select2-id="select2-data-246-v9i6">Chile (+56)
                                                                </option>
                                                                <option value="CO"
                                                                    data-select2-id="select2-data-247-ypqz">Colombia (+57)
                                                                </option>
                                                                <option value="KM"
                                                                    data-select2-id="select2-data-248-tdq7">Comoros (+269)
                                                                </option>
                                                                <option value="CG"
                                                                    data-select2-id="select2-data-249-zc02">
                                                                    Congo-Brazzaville (+242)</option>
                                                                <option value="CK"
                                                                    data-select2-id="select2-data-250-oy4c">Congo-Kinshasa
                                                                    (+682)</option>
                                                                <option value="CR"
                                                                    data-select2-id="select2-data-251-yklu">Costa Rica
                                                                    (+506)</option>
                                                                <option value="CD"
                                                                    data-select2-id="select2-data-252-3ljk">Côte d'Ivoire
                                                                    (+243)</option>
                                                                <option value="HR"
                                                                    data-select2-id="select2-data-253-cabb">Croatia (+385)
                                                                </option>
                                                                <option value="CU"
                                                                    data-select2-id="select2-data-254-5pft">Cuba (+53)
                                                                </option>
                                                                <option value="CY"
                                                                    data-select2-id="select2-data-255-mrae">Cyprus (+357)
                                                                </option>
                                                                <option value="CZ"
                                                                    data-select2-id="select2-data-256-q8nz">Czech Republic
                                                                    (+420)</option>
                                                                <option value="DK"
                                                                    data-select2-id="select2-data-257-f36m">Denmark (+45)
                                                                </option>
                                                                <option value="DJ"
                                                                    data-select2-id="select2-data-258-oph0">Djibouti (+253)
                                                                </option>
                                                                <option value="DM"
                                                                    data-select2-id="select2-data-259-isbp">Dominica (+1)
                                                                </option>
                                                                <option value="DO"
                                                                    data-select2-id="select2-data-260-yuc6">Dominican
                                                                    Republic (+1)</option>
                                                                <option value="TL"
                                                                    data-select2-id="select2-data-261-rznr">East Timor
                                                                    (+670)</option>
                                                                <option value="EC"
                                                                    data-select2-id="select2-data-262-4yk8">Ecuador (+593)
                                                                </option>
                                                                <option value="EG"
                                                                    data-select2-id="select2-data-263-2pk6">Egypt (+20)
                                                                </option>
                                                                <option value="SV"
                                                                    data-select2-id="select2-data-264-8gga">El Salvador
                                                                    (+503)</option>
                                                                <option value="GQ"
                                                                    data-select2-id="select2-data-265-gnja">Equatorial
                                                                    Guinea (+240)</option>
                                                                <option value="ER"
                                                                    data-select2-id="select2-data-266-3wqq">Eritrea (+291)
                                                                </option>
                                                                <option value="EE"
                                                                    data-select2-id="select2-data-267-ljiu">Estonia (+372)
                                                                </option>
                                                                <option value="ET"
                                                                    data-select2-id="select2-data-268-mola">Ethiopia (+251)
                                                                </option>
                                                                <option value="FJ"
                                                                    data-select2-id="select2-data-269-fxmn">Fiji (+679)
                                                                </option>
                                                                <option value="FI"
                                                                    data-select2-id="select2-data-270-mt8s">Finland (+358)
                                                                </option>
                                                                <option value="FR"
                                                                    data-select2-id="select2-data-271-rsc0">France (+33)
                                                                </option>
                                                                <option value="GA"
                                                                    data-select2-id="select2-data-272-qblm">Gabon (+241)
                                                                </option>
                                                                <option value="GM"
                                                                    data-select2-id="select2-data-273-6bzt">Gambia (+220)
                                                                </option>
                                                                <option value="GE"
                                                                    data-select2-id="select2-data-274-lrds">Georgia (+995)
                                                                </option>
                                                                <option value="DE"
                                                                    data-select2-id="select2-data-275-m1op">Germany (+49)
                                                                </option>
                                                                <option value="GH"
                                                                    data-select2-id="select2-data-276-whh0">Ghana (+233)
                                                                </option>
                                                                <option value="GR"
                                                                    data-select2-id="select2-data-277-hwg9">Greece (+30)
                                                                </option>
                                                                <option value="GD"
                                                                    data-select2-id="select2-data-278-lihx">Grenada (+1)
                                                                </option>
                                                                <option value="GT"
                                                                    data-select2-id="select2-data-279-eprh">Guatemala
                                                                    (+502)</option>
                                                                <option value="GN"
                                                                    data-select2-id="select2-data-280-kkne">Guinea (+224)
                                                                </option>
                                                                <option value="GW"
                                                                    data-select2-id="select2-data-281-0eok">Guinea-Bissau
                                                                    (+245)</option>
                                                                <option value="GY"
                                                                    data-select2-id="select2-data-282-9m85">Guyana (+592)
                                                                </option>
                                                                <option value="HT"
                                                                    data-select2-id="select2-data-283-purp">Haiti (+509)
                                                                </option>
                                                                <option value="HN"
                                                                    data-select2-id="select2-data-284-7vcs">Honduras (+504)
                                                                </option>
                                                                <option value="HK"
                                                                    data-select2-id="select2-data-285-6hok">Hong Kong
                                                                    (+852)</option>
                                                                <option value="HU"
                                                                    data-select2-id="select2-data-286-dnaa">Hungary (+36)
                                                                </option>
                                                                <option value="IS"
                                                                    data-select2-id="select2-data-287-3btq">Iceland (+354)
                                                                </option>
                                                                <option value="IN"
                                                                    data-select2-id="select2-data-288-btbu">India (+91)
                                                                </option>
                                                                <option value="ID"
                                                                    data-select2-id="select2-data-289-2fj5">Indonesia (+62)
                                                                </option>
                                                                <option value="IR"
                                                                    data-select2-id="select2-data-290-oq79">Iran (+98)
                                                                </option>
                                                                <option value="IQ"
                                                                    data-select2-id="select2-data-291-g14s">Iraq (+964)
                                                                </option>
                                                                <option value="IE"
                                                                    data-select2-id="select2-data-292-3oso">Ireland (+353)
                                                                </option>
                                                                <option value="IL"
                                                                    data-select2-id="select2-data-293-qckb">Israel (+972)
                                                                </option>
                                                                <option value="IT"
                                                                    data-select2-id="select2-data-294-5370">Italy (+39)
                                                                </option>
                                                                <option value="JM"
                                                                    data-select2-id="select2-data-295-q91c">Jamaica (+1)
                                                                </option>
                                                                <option value="JP"
                                                                    data-select2-id="select2-data-296-5vgy">Japan (Nippon)
                                                                    (+81)</option>
                                                                <option value="JO"
                                                                    data-select2-id="select2-data-297-ioom">Jordan (+962)
                                                                </option>
                                                                <option value="KZ"
                                                                    data-select2-id="select2-data-298-flys">Kazakhstan (+7)
                                                                </option>
                                                                <option value="KE"
                                                                    data-select2-id="select2-data-299-w1rf">Kenya (+254)
                                                                </option>
                                                                <option value="KI"
                                                                    data-select2-id="select2-data-300-jdpr">Kiribati (+686)
                                                                </option>
                                                                <option value="KP"
                                                                    data-select2-id="select2-data-301-cymq">North Korea
                                                                    (+850)</option>
                                                                <option value="XK"
                                                                    data-select2-id="select2-data-302-y6i2">Kosovo (+383)
                                                                </option>
                                                                <option value="KW"
                                                                    data-select2-id="select2-data-303-ae0o">Kuwait (+965)
                                                                </option>
                                                                <option value="KG"
                                                                    data-select2-id="select2-data-304-9bsv">Kyrgyzstan
                                                                    (+996)</option>
                                                                <option value="LA"
                                                                    data-select2-id="select2-data-305-824b">Laos (+856)
                                                                </option>
                                                                <option value="LV"
                                                                    data-select2-id="select2-data-306-rst5">Latvia (+371)
                                                                </option>
                                                                <option value="LB"
                                                                    data-select2-id="select2-data-307-ztpq">Lebanon (+961)
                                                                </option>
                                                                <option value="LS"
                                                                    data-select2-id="select2-data-308-md7a">Lesotho (+266)
                                                                </option>
                                                                <option value="LR"
                                                                    data-select2-id="select2-data-309-tp5d">Liberia (+231)
                                                                </option>
                                                                <option value="LY"
                                                                    data-select2-id="select2-data-310-tiwz">Libya (+218)
                                                                </option>
                                                                <option value="LI"
                                                                    data-select2-id="select2-data-311-5qfn">Liechtenstein
                                                                    (+423)</option>
                                                                <option value="LT"
                                                                    data-select2-id="select2-data-312-xauy">Lithuania
                                                                    (+370)</option>
                                                                <option value="LU"
                                                                    data-select2-id="select2-data-313-lzk4">Luxembourg
                                                                    (+352)</option>
                                                                <option value="MK"
                                                                    data-select2-id="select2-data-314-x8np">Macedonia
                                                                    (FYROM) (+389)</option>
                                                                <option value="MG"
                                                                    data-select2-id="select2-data-315-oy9y">Madagascar
                                                                    (+261)</option>
                                                                <option value="MW"
                                                                    data-select2-id="select2-data-316-tcwx">Malawi (+265)
                                                                </option>
                                                                <option value="MY"
                                                                    data-select2-id="select2-data-317-b6da">Malaysia (+60)
                                                                </option>
                                                                <option value="MV"
                                                                    data-select2-id="select2-data-318-np7d">Maldives (+960)
                                                                </option>
                                                                <option value="ML"
                                                                    data-select2-id="select2-data-319-md0q">Mali (+223)
                                                                </option>
                                                                <option value="MT"
                                                                    data-select2-id="select2-data-320-l0ht">Malta (+356)
                                                                </option>
                                                                <option value="MH"
                                                                    data-select2-id="select2-data-321-7wpf">Marshall
                                                                    Islands (+692)</option>
                                                                <option value="MR"
                                                                    data-select2-id="select2-data-322-w68l">Mauritania
                                                                    (+222)</option>
                                                                <option value="MU"
                                                                    data-select2-id="select2-data-323-9lqy">Mauritius
                                                                    (+230)</option>
                                                                <option value="MX"
                                                                    data-select2-id="select2-data-324-eyjz">Mexico (+52)
                                                                </option>
                                                                <option value="FM"
                                                                    data-select2-id="select2-data-325-e3au">Micronesia
                                                                    (+691)</option>
                                                                <option value="MD"
                                                                    data-select2-id="select2-data-326-pzi8">Moldova (+373)
                                                                </option>
                                                                <option value="MC"
                                                                    data-select2-id="select2-data-327-m9mz">Monaco (+377)
                                                                </option>
                                                                <option value="MN"
                                                                    data-select2-id="select2-data-328-qbcv">Mongolia (+976)
                                                                </option>
                                                                <option value="ME"
                                                                    data-select2-id="select2-data-329-rq1x">Montenegro
                                                                    (+382)</option>
                                                                <option value="MA"
                                                                    data-select2-id="select2-data-330-na1n">Morocco (+212)
                                                                </option>
                                                                <option value="MZ"
                                                                    data-select2-id="select2-data-331-mvu3">Mozambique
                                                                    (+258)</option>
                                                                <option value="MM"
                                                                    data-select2-id="select2-data-332-pvyb">Myanmar (+95)
                                                                </option>
                                                                <option value="NA"
                                                                    data-select2-id="select2-data-333-o422">Namibia (+264)
                                                                </option>
                                                                <option value="NR"
                                                                    data-select2-id="select2-data-334-82xd">Nauru (+674)
                                                                </option>
                                                                <option value="NP"
                                                                    data-select2-id="select2-data-335-miys">Nepal (+977)
                                                                </option>
                                                                <option value="NL"
                                                                    data-select2-id="select2-data-336-ptyj">Netherlands
                                                                    (+31)</option>
                                                                <option value="NZ"
                                                                    data-select2-id="select2-data-337-qoj4">New Zealand
                                                                    (+64)</option>
                                                                <option value="NI"
                                                                    data-select2-id="select2-data-338-ev3h">Nicaragua
                                                                    (+505)</option>
                                                                <option value="NE"
                                                                    data-select2-id="select2-data-339-k5kt">Niger (+227)
                                                                </option>
                                                                <option value="NG"
                                                                    data-select2-id="select2-data-340-p1g1">Nigeria (+234)
                                                                </option>
                                                                <option value="KR"
                                                                    data-select2-id="select2-data-341-sjzs">South Korea
                                                                    (+82)</option>
                                                                <option value="NC"
                                                                    data-select2-id="select2-data-342-t5ag">New Caledonia
                                                                    (+687)</option>
                                                                <option value="NO"
                                                                    data-select2-id="select2-data-343-5x5l">Norway (+47)
                                                                </option>
                                                                <option value="OM"
                                                                    data-select2-id="select2-data-344-96dk">Oman (+968)
                                                                </option>
                                                                <option value="PK"
                                                                    data-select2-id="select2-data-345-d60d">Pakistan (+92)
                                                                </option>
                                                                <option value="PW"
                                                                    data-select2-id="select2-data-346-iqih">Palau (+680)
                                                                </option>
                                                                <option value="PS"
                                                                    data-select2-id="select2-data-347-e9v9">Palestine
                                                                    (+970)</option>
                                                                <option value="PA"
                                                                    data-select2-id="select2-data-348-vin7">Panama (+507)
                                                                </option>
                                                                <option value="PG"
                                                                    data-select2-id="select2-data-349-wiqw">Papua New
                                                                    Guinea (+675)</option>
                                                                <option value="PY"
                                                                    data-select2-id="select2-data-350-ws1i">Paraguay (+595)
                                                                </option>
                                                                <option value="PE"
                                                                    data-select2-id="select2-data-351-xdsu">Peru (+51)
                                                                </option>
                                                                <option value="PH"
                                                                    data-select2-id="select2-data-352-ydrr">Philippines
                                                                    (+63)</option>
                                                                <option value="PL"
                                                                    data-select2-id="select2-data-353-bekd">Poland (+48)
                                                                </option>
                                                                <option value="PT"
                                                                    data-select2-id="select2-data-354-f6me">Portugal
                                                                    (+351)</option>
                                                                <option value="QA"
                                                                    data-select2-id="select2-data-355-prjz">Qatar (+974)
                                                                </option>
                                                                <option value="RO"
                                                                    data-select2-id="select2-data-356-9l47">Romania (+40)
                                                                </option>
                                                                <option value="RU"
                                                                    data-select2-id="select2-data-357-bwt4">Russia (+7)
                                                                </option>
                                                                <option value="RW"
                                                                    data-select2-id="select2-data-358-ecjp">Rwanda (+250)
                                                                </option>
                                                                <option value="KN"
                                                                    data-select2-id="select2-data-359-5o3d">Saint Kitts
                                                                    and Nevis (+1)</option>
                                                                <option value="LC"
                                                                    data-select2-id="select2-data-360-o0vm">Saint Lucia
                                                                    (+1)</option>
                                                                <option value="VC"
                                                                    data-select2-id="select2-data-361-eget">Saint Vincent
                                                                    and the Grenadines (+1)</option>
                                                                <option value="WS"
                                                                    data-select2-id="select2-data-362-kr2x">Samoa (+685)
                                                                </option>
                                                                <option value="SM"
                                                                    data-select2-id="select2-data-363-fstz">San Marino
                                                                    (+378)</option>
                                                                <option value="ST"
                                                                    data-select2-id="select2-data-364-y7qn">Sao Tome and
                                                                    Principe (+239)</option>
                                                                <option value="SA"
                                                                    data-select2-id="select2-data-365-j876">Saudi Arabia
                                                                    (+966)</option>
                                                                <option value="SS"
                                                                    data-select2-id="select2-data-366-aiu3">South Sudan
                                                                    (+211)</option>
                                                                <option value="SN"
                                                                    data-select2-id="select2-data-367-xf8i">Senegal (+221)
                                                                </option>
                                                                <option value="RS"
                                                                    data-select2-id="select2-data-368-jbrk">Serbia (+381)
                                                                </option>
                                                                <option value="SC"
                                                                    data-select2-id="select2-data-369-adls">Seychelles
                                                                    (+248)</option>
                                                                <option value="SL"
                                                                    data-select2-id="select2-data-370-hz17">Sierra Leone
                                                                    (+232)</option>
                                                                <option value="SG"
                                                                    data-select2-id="select2-data-371-xdxn">Singapore
                                                                    (+65)</option>
                                                                <option value="SH"
                                                                    data-select2-id="select2-data-372-bnkn">Saint Helena
                                                                    (+290)</option>
                                                                <option value="SK"
                                                                    data-select2-id="select2-data-373-c5y6">Slovakia
                                                                    (+421)</option>
                                                                <option value="SI"
                                                                    data-select2-id="select2-data-374-7kvw">Slovenia
                                                                    (+386)</option>
                                                                <option value="SB"
                                                                    data-select2-id="select2-data-375-2yri">Solomon
                                                                    Islands (+677)</option>
                                                                <option value="SO"
                                                                    data-select2-id="select2-data-376-by6g">Somalia (+252)
                                                                </option>
                                                                <option value="SJ"
                                                                    data-select2-id="select2-data-377-deg6">Svalbard and
                                                                    Jan Mayen (+47)</option>
                                                                <option value="ZA"
                                                                    data-select2-id="select2-data-378-8hh9">South Africa
                                                                    (+27)</option>
                                                                <option value="ES"
                                                                    data-select2-id="select2-data-379-9i2r">Spain (+34)
                                                                </option>
                                                                <option value="LK"
                                                                    data-select2-id="select2-data-380-dse1">Sri Lanka
                                                                    (+94)</option>
                                                                <option value="SD"
                                                                    data-select2-id="select2-data-381-r042">Sudan (+249)
                                                                </option>
                                                                <option value="SR"
                                                                    data-select2-id="select2-data-382-yh6l">Suriname
                                                                    (+597)</option>
                                                                <option value="SZ"
                                                                    data-select2-id="select2-data-383-ue3r">Swaziland
                                                                    (+268)</option>
                                                                <option value="SE"
                                                                    data-select2-id="select2-data-384-r3et">Sweden (+46)
                                                                </option>
                                                                <option value="CH"
                                                                    data-select2-id="select2-data-385-2awi">Switzerland
                                                                    (+41)</option>
                                                                <option value="SY"
                                                                    data-select2-id="select2-data-386-l15z">Syria (+963)
                                                                </option>
                                                                <option value="TJ"
                                                                    data-select2-id="select2-data-387-mmpp">Tajikistan
                                                                    (+992)</option>
                                                                <option value="TZ"
                                                                    data-select2-id="select2-data-388-iav2">Tanzania
                                                                    (+255)</option>
                                                                <option value="TH"
                                                                    data-select2-id="select2-data-389-ub43">Thailand (+66)
                                                                </option>
                                                                <option value="TG"
                                                                    data-select2-id="select2-data-390-vg52">Togo (+228)
                                                                </option>
                                                                <option value="TO"
                                                                    data-select2-id="select2-data-391-fl9a">Tonga (+676)
                                                                </option>
                                                                <option value="TK"
                                                                    data-select2-id="select2-data-392-uior">Tokelau (+690)
                                                                </option>
                                                                <option value="TT"
                                                                    data-select2-id="select2-data-393-9qtr">Trinidad and
                                                                    Tobago (+1)</option>
                                                                <option value="TN"
                                                                    data-select2-id="select2-data-394-poq3">Tunisia (+216)
                                                                </option>
                                                                <option value="TR"
                                                                    data-select2-id="select2-data-395-7wco">Turkey (+90)
                                                                </option>
                                                                <option value="CN"
                                                                    data-select2-id="select2-data-396-o1pm">China (+86)
                                                                </option>
                                                                <option value="TM"
                                                                    data-select2-id="select2-data-397-ohwl">Turkmenistan
                                                                    (+993)</option>
                                                                <option value="TV"
                                                                    data-select2-id="select2-data-398-e5c1">Tuvalu (+688)
                                                                </option>
                                                                <option value="UG"
                                                                    data-select2-id="select2-data-399-b24p">Uganda (+256)
                                                                </option>
                                                                <option value="UA"
                                                                    data-select2-id="select2-data-400-ltv2">Ukraine (+380)
                                                                </option>
                                                                <option value="AE"
                                                                    data-select2-id="select2-data-401-ore7">United Arab
                                                                    Emirates (+971)</option>
                                                                <option value="GB"
                                                                    data-select2-id="select2-data-402-mlco">United Kingdom
                                                                    (+44)</option>
                                                                <option value="US"
                                                                    data-select2-id="select2-data-403-v0kd">United States
                                                                    (+1)</option>
                                                                <option value="UY"
                                                                    data-select2-id="select2-data-404-x3lr">Uruguay (+598)
                                                                </option>
                                                                <option value="UZ"
                                                                    data-select2-id="select2-data-405-k1z7">Uzbekistan
                                                                    (+998)</option>
                                                                <option value="VU"
                                                                    data-select2-id="select2-data-406-3ddz">Vanuatu (+678)
                                                                </option>
                                                                <option value="VA"
                                                                    data-select2-id="select2-data-407-115h">Vatican (+39)
                                                                </option>
                                                                <option value="VE"
                                                                    data-select2-id="select2-data-408-xxqm">Venezuela
                                                                    (+58)</option>
                                                                <option value="VN"
                                                                    data-select2-id="select2-data-409-22f3">Vietnam (+84)
                                                                </option>
                                                                <option value="EH"
                                                                    data-select2-id="select2-data-410-alpl">Western Sahara
                                                                    (+212)</option>
                                                                <option value="YE"
                                                                    data-select2-id="select2-data-411-bd1z">Yemen (+967)
                                                                </option>
                                                                <option value="ZM"
                                                                    data-select2-id="select2-data-412-e4gw">Zambia (+260)
                                                                </option>
                                                                <option value="ZW"
                                                                    data-select2-id="select2-data-413-aq8n">Zimbabwe
                                                                    (+263)</option>
                                                                <option value="TW"
                                                                    data-select2-id="select2-data-414-o73o">Taiwan (+886)
                                                                </option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--default"
                                                                dir="ltr" data-select2-id="select2-data-211-w0de"
                                                                style="width: 56px;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single select2-phone-region"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-shippingPhoneRegion-zl-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-shippingPhoneRegion-zl-container"
                                                                            role="textbox" aria-readonly="true"
                                                                            title="Vietnam (+84)"><span
                                                                                class="fi fi-vn"></span></span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="field "
                                                    data-bind-class="{'field--show-floating-label': shipping.address}">
                                                    <div class="field__input-wrapper">
                                                        <label for="shippingAddress" class="field__label">
                                                            Địa chỉ (tùy chọn)
                                                        </label>
                                                        <input name="shippingAddress" id="shippingAddress"
                                                            type="text" class="field__input"
                                                            data-bind="shipping.address" value=""
                                                            tabindex="-1">
                                                    </div>

                                                </div>


                                                <div class="field field--show-floating-label ">
                                                    <div class="field__input-wrapper field__input-wrapper--select2">
                                                        <label for="shippingProvince" class="field__label">Tỉnh
                                                            thành</label>
                                                        <select name="shippingProvince" id="shippingProvince"
                                                            size="1"
                                                            class="field__input field__input--select select2-hidden-accessible"
                                                            data-bind="shipping.province" value=""
                                                            data-address-type="province" data-address-zone="shipping"
                                                            data-select2-id="select2-data-shippingProvince"
                                                            tabindex="-1" aria-hidden="true">
                                                            <option value="" hidden=""
                                                                data-select2-id="select2-data-416-z6qz"></option>
                                                            <option value="1">Hà Nội</option>
                                                            <option value="2">TP Hồ Chí Minh</option>
                                                            <option value="3">An Giang</option>
                                                            <option value="4">Bà Rịa-Vũng Tàu</option>
                                                            <option value="5">Bắc Giang</option>
                                                            <option value="6">Bắc Kạn</option>
                                                            <option value="7">Bạc Liêu</option>
                                                            <option value="8">Bắc Ninh</option>
                                                            <option value="9">Bến Tre</option>
                                                            <option value="10">Bình Dương</option>
                                                            <option value="11">Bình Định</option>
                                                            <option value="12">Bình Phước</option>
                                                            <option value="13">Bình Thuận</option>
                                                            <option value="14">Cà Mau</option>
                                                            <option value="15">Cao Bằng</option>
                                                            <option value="16">Cần Thơ</option>
                                                            <option value="17">Đà Nẵng</option>
                                                            <option value="18">Đắk Lắk</option>
                                                            <option value="19">Đắk Nông</option>
                                                            <option value="20">Điện Biên</option>
                                                            <option value="21">Đồng Nai</option>
                                                            <option value="22">Đồng Tháp</option>
                                                            <option value="23">Gia Lai</option>
                                                            <option value="24">Hà Giang</option>
                                                            <option value="25">Hà Nam</option>
                                                            <option value="26">Hà Tĩnh</option>
                                                            <option value="27">Hải Dương</option>
                                                            <option value="28">Hải Phòng</option>
                                                            <option value="29">Hậu Giang</option>
                                                            <option value="30">Hòa Bình</option>
                                                            <option value="31">Hưng Yên</option>
                                                            <option value="32">Khánh Hòa</option>
                                                            <option value="33">Kiên Giang</option>
                                                            <option value="34">Kon Tum</option>
                                                            <option value="35">Lai Châu</option>
                                                            <option value="36">Lâm Đồng</option>
                                                            <option value="37">Lạng Sơn</option>
                                                            <option value="38">Lào Cai</option>
                                                            <option value="39">Long An</option>
                                                            <option value="40">Nam Định</option>
                                                            <option value="41">Nghệ An</option>
                                                            <option value="42">Ninh Bình</option>
                                                            <option value="43">Ninh Thuận</option>
                                                            <option value="44">Phú Thọ</option>
                                                            <option value="45">Phú Yên</option>
                                                            <option value="46">Quảng Bình</option>
                                                            <option value="47">Quảng Nam</option>
                                                            <option value="48">Quảng Ngãi</option>
                                                            <option value="49">Quảng Ninh</option>
                                                            <option value="50">Quảng Trị</option>
                                                            <option value="51">Sóc Trăng</option>
                                                            <option value="52">Sơn La</option>
                                                            <option value="53">Tây Ninh</option>
                                                            <option value="54">Thái Bình</option>
                                                            <option value="55">Thái Nguyên</option>
                                                            <option value="56">Thanh Hóa</option>
                                                            <option value="57">Thừa Thiên Huế</option>
                                                            <option value="58">Tiền Giang</option>
                                                            <option value="59">Trà Vinh</option>
                                                            <option value="60">Tuyên Quang</option>
                                                            <option value="61">Vĩnh Long</option>
                                                            <option value="62">Vĩnh Phúc</option>
                                                            <option value="63">Yên Bái</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" data-select2-id="select2-data-3-l8a2"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="-1"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-shippingProvince-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-shippingProvince-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="---">---</span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>

                                                </div>

                                                <div class="field field--show-floating-label ">
                                                    <div class="field__input-wrapper field__input-wrapper--select2">
                                                        <label for="shippingDistrict" class="field__label">
                                                            Quận huyện (tùy chọn)
                                                        </label>
                                                        <select name="shippingDistrict" id="shippingDistrict"
                                                            size="1"
                                                            class="field__input field__input--select select2-hidden-accessible"
                                                            data-bind="shipping.district" value=""
                                                            data-address-type="district" data-address-zone="shipping"
                                                            data-select2-id="select2-data-shippingDistrict"
                                                            tabindex="-1" aria-hidden="true"
                                                            disabled="disabled"></select><span
                                                            class="select2 select2-container select2-container--default select2-container--disabled"
                                                            dir="ltr" data-select2-id="select2-data-4-jkm2"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="-1"
                                                                    aria-disabled="true"
                                                                    aria-labelledby="select2-shippingDistrict-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-shippingDistrict-container"
                                                                        role="textbox" aria-readonly="true"></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>

                                                </div>



                                            </div>
                                        </div>
                                    </section>

                                    <div class="fieldset">
                                        <h3 class="visually-hidden">Ghi chú</h3>
                                        <div class="field " data-bind-class="{'field--show-floating-label': note}">
                                            <div class="field__input-wrapper">
                                                <label for="note" class="field__label">
                                                    Ghi chú (tùy chọn)
                                                </label>
                                                <textarea name="note" id="note" class="field__input" data-bind="note"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col col--two">








                                    <section class="section" data-define="{shippingMethod: ''}">
                                        <div class="section__header">
                                            <div class="layout-flex">
                                                <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                    <i class="fa fa-truck fa-lg section__title--icon hide-on-desktop"></i>
                                                    Vận chuyển
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="section__content" data-tg-refresh="refreshShipping"
                                            id="shippingMethodList"
                                            data-define="{isAddressSelecting: true, shippingMethods: []}">
                                            <div class="alert alert--loader spinner spinner--active hide"
                                                data-bind-show="isLoadingShippingMethod">
                                                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                                    <use href="#spinner"></use>
                                                </svg> --}}
                                            </div>


                                            <div class="alert alert-retry alert--danger hide"
                                                data-bind-event-click="handleShippingMethodErrorRetry()"
                                                data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; isLoadingShippingError">
                                                <span data-bind="loadingShippingErrorMessage">Không thể load phí vận
                                                    chuyển. Vui lòng thử lại</span> <i class="fa fa-refresh"></i>
                                            </div>


                                            <div class="content-box hide"
                                                data-bind-show="!isLoadingShippingMethod &amp;&amp; !isAddressSelecting &amp;&amp; !isLoadingShippingError">


                                            </div>

                                            <div class="alert alert--info"
                                                data-bind-show="!isLoadingShippingMethod &amp;&amp; isAddressSelecting">
                                                Vui lòng nhập thông tin giao hàng
                                            </div>
                                        </div>
                                    </section>

                                    <section class="section">
                                        <div class="section__header">
                                            <div class="layout-flex">
                                                <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                                    <i
                                                        class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
                                                    Thanh toán
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="section__content">

                                            <div class="content-box" data-define="{paymentMethod: undefined}">


                                                <div class="content-box__row">
                                                    <div class="radio-wrapper">
                                                        <div class="radio__input">
                                                            <input name="paymentMethod" id="paymentMethod-438798"
                                                                type="radio" class="input-radio"
                                                                data-bind="paymentMethod" value="438798">
                                                        </div>
                                                        <label for="paymentMethod-438798" class="radio__label">
                                                            <span class="radio__label__primary">Chuyển khoản qua ngân
                                                                hàng</span>
                                                            <span class="radio__label__accessory">
                                                                <span class="radio__label__icon">
                                                                    <i class="payment-icon payment-icon--3"></i>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>

                                                    <div class="content-box__row__desc hide"
                                                        data-bind-show="paymentMethod == 438798">
                                                        <p>Sau khi xác nhận đặt hàng, Quý khách có thể đến bất kì PGD ngân
                                                            hàng, ATM hoặc sử dụng tính năng Internet Banking để chuyển tiền
                                                            vào một trong các tài khoản sau:</p>
                                                        <p></p>
                                                        <p>CHỦ TÀI KHOẢN: TRẦN THANH BÌNH</p>
                                                        <p>+ Vietcombank: 9111122222</p>
                                                        <p>+ Vietinbank: 100555399999</p>
                                                        <p>+ Sacombank: 060105630576</p>
                                                        <p>+ BIDV: 36810000113917</p>
                                                        <p>+ Agribank: 6320205822010</p>
                                                        <p>+ ACB: 111178178</p>
                                                        <p>+ Đông Á: 0110188465</p>
                                                        <p>* Lưu ý: Quý khách cần thông báo lại cho chúng tôi nội dung
                                                            chuyển khoản để chúng tôi kiểm tra thông tin và xác nhận.</p>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </article>
                            <div class="field__input-btn-wrapper field__input-btn-wrapper--vertical hide-on-desktop">
                                <button type="submit" class="btn btn-checkout spinner"
                                    data-bind-class="{'spinner--active': isSubmitingCheckout}"
                                    data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
                                    <span class="spinner-label">ĐẶT HÀNG</span>
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                        <use href="#spinner"></use>
                                    </svg> --}}
                                </button>

                                <a href="/cart" class="previous-link">
                                    <i class="previous-link__arrow">❮</i>
                                    <span class="previous-link__content">Quay về giỏ hàng</span>
                                </a>

                            </div>

                            <div id="common-alert" data-tg-refresh="refreshError">


                                <div class="alert alert--danger hide-on-desktop hide"
                                    data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError"
                                    data-bind="submitingCheckoutErrorMessage">Có lỗi xảy ra khi xử lý. Vui lòng thử lại
                                </div>
                            </div>
                        </div>

                    </main>
                    <aside class="sidebar">
                        <div class="sidebar__header">
                            <h2 class="sidebar__title">
                                Đơn hàng (2 sản phẩm)
                            </h2>
                        </div>
                        <div class="sidebar__content">
                            <div id="order-summary" class="order-summary order-summary--is-collapsed">
                                <div class="order-summary__sections">
                                    <div
                                        class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
                                        <table class="product-table">
                                            <caption class="visually-hidden">Chi tiết đơn hàng</caption>
                                            <thead class="product-table__header">
                                                <tr>
                                                    <th>
                                                        <span class="visually-hidden">Ảnh sản phẩm</span>
                                                    </th>
                                                    <th>
                                                        <span class="visually-hidden">Mô tả</span>
                                                    </th>
                                                    <th>
                                                        <span class="visually-hidden">Sổ lượng</span>
                                                    </th>
                                                    <th>
                                                        <span class="visually-hidden">Đơn giá</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr class="product">
                                                    <td class="product__image">
                                                        <div class="product-thumbnail">
                                                            <div class="product-thumbnail__wrapper" data-tg-static="">
                                                                <img src="//bizweb.dktcdn.net/thumb/thumb/100/189/969/products/gio-hoa-tuoi-dep-love-59.jpg?v=1644392429733"
                                                                    alt="Giỏ hoa tươi đẹp LOVE-G59"
                                                                    class="product-thumbnail__image">
                                                            </div>
                                                            <span class="product-thumbnail__quantity">1</span>
                                                        </div>
                                                    </td>
                                                    <th class="product__description">
                                                        <span class="product__description__name">
                                                            Giỏ hoa tươi đẹp LOVE-G59
                                                        </span>


                                                    </th>
                                                    <td class="product__quantity visually-hidden"><em>Số lượng:</em> 1
                                                    </td>
                                                    <td class="product__price">

                                                        1.000.000₫

                                                    </td>
                                                </tr>

                                                <tr class="product">
                                                    <td class="product__image">
                                                        <div class="product-thumbnail">
                                                            <div class="product-thumbnail__wrapper" data-tg-static="">
                                                                <img src="//bizweb.dktcdn.net/thumb/thumb/100/189/969/products/bo-hoa-tuoi-love-23.jpg?v=1644042607763"
                                                                    alt="Bó hoa tươi LOVE-23"
                                                                    class="product-thumbnail__image">
                                                            </div>
                                                            <span class="product-thumbnail__quantity">1</span>
                                                        </div>
                                                    </td>
                                                    <th class="product__description">
                                                        <span class="product__description__name">
                                                            Bó hoa tươi LOVE-23
                                                        </span>


                                                    </th>
                                                    <td class="product__quantity visually-hidden"><em>Số lượng:</em> 1
                                                    </td>
                                                    <td class="product__price">

                                                        450.000₫

                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="order-summary__section order-summary__section--discount-code"
                                        data-tg-refresh="refreshDiscount" id="discountCode">
                                        <h3 class="visually-hidden">Mã khuyến mại</h3>
                                        <div class="edit_checkout animate-floating-labels">
                                            <div class="fieldset">
                                                <div class="field ">
                                                    <div class="field__input-btn-wrapper">
                                                        <div class="field__input-wrapper">
                                                            <label for="reductionCode" class="field__label">Nhập mã giảm
                                                                giá</label>
                                                            <input name="reductionCode" id="reductionCode"
                                                                type="text" class="field__input" autocomplete="off"
                                                                data-bind-disabled="isLoadingReductionCode"
                                                                data-bind-event-keypress="handleReductionCodeKeyPress(event)"
                                                                data-define="{reductionCode: null}"
                                                                data-bind="reductionCode">
                                                        </div>
                                                        <button class="field__input-btn btn spinner btn--disabled"
                                                            type="button"
                                                            data-bind-disabled="isLoadingReductionCode || !reductionCode"
                                                            data-bind-class="{'spinner--active': isLoadingReductionCode, 'btn--disabled': !reductionCode}"
                                                            data-bind-event-click="applyReductionCode()" disabled="">
                                                            <span class="spinner-label">Áp dụng</span>
                                                            {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="spinner-loader">
                                                                <use href="#spinner"></use>
                                                            </svg> --}}
                                                        </button>
                                                    </div>

                                                    <p class="field__message field__message--error field__message--error-always-show hide"
                                                        data-bind-show="!isLoadingReductionCode &amp;&amp; isLoadingReductionCodeError"
                                                        data-bind="loadingReductionCodeErrorMessage">Có lỗi xảy ra khi áp
                                                        dụng khuyến mãi. Vui lòng thử lại</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-summary__section order-summary__section--total-lines order-summary--collapse-element"
                                        data-define="{subTotalPriceText: '1.450.000₫'}"
                                        data-tg-refresh="refreshOrderTotalPrice" id="orderSummary">
                                        <table class="total-line-table">
                                            <caption class="visually-hidden">Tổng giá trị</caption>
                                            <thead>
                                                <tr>
                                                    <td><span class="visually-hidden">Mô tả</span></td>
                                                    <td><span class="visually-hidden">Giá tiền</span></td>
                                                </tr>
                                            </thead>
                                            <tbody class="total-line-table__tbody">
                                                <tr class="total-line total-line--subtotal">
                                                    <th class="total-line__name">
                                                        Tạm tính
                                                    </th>
                                                    <td class="total-line__price">1.450.000₫</td>
                                                </tr>

                                                <tr class="total-line total-line--shipping-fee">
                                                    <th class="total-line__name">
                                                        Phí vận chuyển
                                                    </th>
                                                    <td class="total-line__price" data-bind="getTextShippingPrice()">-
                                                    </td>
                                                </tr>

                                            </tbody>
                                            <tfoot class="total-line-table__footer">
                                                <tr class="total-line payment-due">
                                                    <th class="total-line__name">
                                                        <span class="payment-due__label-total">
                                                            Tổng cộng
                                                        </span>
                                                    </th>
                                                    <td class="total-line__price">
                                                        <span class="payment-due__price"
                                                            data-bind="getTextTotalPrice()">1.450.000₫</span>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div
                                        class="order-summary__nav field__input-btn-wrapper hide-on-mobile layout-flex--row-reverse">
                                        <button type="submit" class="btn btn-checkout spinner"
                                            data-bind-class="{'spinner--active': isSubmitingCheckout}"
                                            data-bind-disabled="isSubmitingCheckout || isLoadingReductionCode">
                                            <span class="spinner-label">ĐẶT HÀNG</span>
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="spinner-loader">
                                                <use href="#spinner"></use>
                                            </svg> --}}
                                        </button>


                                        <a href="/cart" class="previous-link">
                                            <i class="previous-link__arrow">❮</i>
                                            <span class="previous-link__content">Quay về giỏ hàng</span>
                                        </a>

                                    </div>
                                    <div id="common-alert-sidebar" data-tg-refresh="refreshError">


                                        <div class="alert alert--danger hide-on-mobile hide"
                                            data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError"
                                            data-bind="submitingCheckoutErrorMessage">Có lỗi xảy ra khi xử lý. Vui lòng
                                            thử lại</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </form>

            {{-- <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="spinner">
                    <svg viewBox="0 0 30 30">
                        <circle stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                            stroke-dasharray="85%" cx="50%" cy="50%" r="40%">
                            <animateTransform attributeName="transform" type="rotate" from="0 15 15" to="360 15 15"
                                dur="0.7s" repeatCount="indefinite"></animateTransform>
                        </circle>
                    </svg>
                </symbol>
            </svg> --}}
        </div>
    </div>
@endsection
