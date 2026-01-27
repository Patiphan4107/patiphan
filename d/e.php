<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ใบสมัครงาน - บริษัท ปฏิภาณ จำกัด</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* จำกัดความกว้างของฟอร์มให้อยู่ในกรอบสวยงาม */
    body {
        background-color: #e9ecef; /* สีพื้นหลังอ่อนๆ ให้ฟอร์มเด่นขึ้น */
    }
    .form-container {
        max-width: 800px;
        margin-top: 40px;
        margin-bottom: 60px;
        padding: 40px;
        border: none; /* ลบเส้นขอบเดิม */
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15); /* เพิ่มเงาให้ดูมีมิติ */
        background-color: #ffffff;
    }
    .header-text {
        color: #0d6efd; 
        font-weight: 800; /* เน้นให้หนาขึ้น */
        border-bottom: 4px solid #0d6efd; /* เส้นใต้หนาขึ้น */
        padding-bottom: 15px;
        margin-bottom: 30px;
        letter-spacing: 0.5px;
    }
    .form-section-title {
        color: #007bff; /* ใช้สีน้ำเงินที่โดดเด่น */
        font-size: 1.3rem;
        margin-bottom: 20px;
        padding-left: 10px;
        border-left: 4px solid #28a745; /* เพิ่มเส้นสีเขียวด้านซ้าย */
    }
    .card-form {
        border: 1px solid #cce5ff;
        border-radius: 8px;
        padding: 20px;
        background-color: #f8f9fa; /* สีพื้นหลังส่วนฟอร์ม */
        margin-bottom: 25px;
    }
</style>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 form-container">
            <h2 class="text-center header-text">ใบสมัครงาน - บริษัท ปฏิภาณ จำกัด</h2>
            
            <form method="post" action="f.php" class="needs-validation" novalidate>
                
                <div class="card-form">
                    <h4 class="form-section-title">ตำแหน่งที่ต้องการสมัคร</h4>
                    <div class="mb-4">
                        <label for="position" class="form-label">เลือกตำแหน่งงาน <span class="text-danger">*</span></label>
                        <select name="position" id="position" class="form-select form-select-lg" required>
                            <option value="" disabled selected>-- กรุณาเลือกตำแหน่งที่สนใจ --</option>
                            <optgroup label="ฝ่ายเทคโนโลยี">
                                <option value="Software Developer">Software Developer</option>
                                <option value="System Analyst">System Analyst</option>
                            </optgroup>
                            <optgroup label="ฝ่ายการตลาด">
                                <option value="Digital Marketing Specialist">Digital Marketing Specialist</option>
                                <option value="Sales Executive">Sales Executive</option>
                            </optgroup>
                            <optgroup label="ฝ่ายบริหาร">
                                <option value="HR Officer">HR Officer</option>
                                <option value="Administrative Staff">Administrative Staff</option>
                            </optgroup>
                        </select>
                        <div class="invalid-feedback">กรุณาเลือกตำแหน่งงานที่ต้องการสมัคร</div>
                    </div>
                </div>

                <div class="card-form">
                    <h4 class="form-section-title">ข้อมูลส่วนตัว</h4>
                    <div class="row g-3">
                        
                        <div class="col-md-3">
                            <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                            <select name="prefix" id="prefix" class="form-select" required>
                                <option value="" disabled selected>-- เลือก --</option>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                                <option value="อื่นๆ">อื่นๆ</option>
                            </select>
                            <div class="invalid-feedback">กรุณาเลือกคำนำหน้าชื่อ</div>
                        </div>
                        
                        <div class="col-md-9">
                            <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                            <input type="text" name="fullname" id="fullname" class="form-control" required placeholder="เช่น ปฏิภาณ พงษ์เพ็ชร">
                            <div class="invalid-feedback">กรุณากรอกชื่อ-สกุล</div>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="birthdate" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                            <input type="date" name="birthdate" id="birthdate" class="form-control" required>
                            <div class="invalid-feedback">กรุณาเลือกวันเดือนปีเกิด</div>
                        </div>
                    </div>
                </div>
                
                <div class="card-form">
                    <h4 class="form-section-title">การศึกษาและความสามารถ</h4>

                    <div class="mb-3">
                        <label for="education" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                        <select name="education" id="education" class="form-select" required>
                            <option value="" disabled selected>-- เลือก --</option>
                            <option value="มัธยมศึกษา">มัธยมศึกษา</option>
                            <option value="ปวช./ปวส.">ปวช./ปวส.</option>
                            <option value="ปริญญาตรี">ปริญญาตรี</option>
                            <option value="ปริญญาโท">ปริญญาโท</option>
                            <option value="ปริญญาเอก">ปริญญาเอก</option>
                        </select>
                        <div class="invalid-feedback">กรุณาเลือกระดับการศึกษาสูงสุด</div>
                    </div>

                    <div class="mb-3">
                        <label for="skill" class="form-label">ความสามารถพิเศษ (เช่น ภาษา, โปรแกรมคอมพิวเตอร์) </label>
                        <textarea name="skill" id="skill" class="form-control" rows="3" placeholder="โปรดระบุทักษะ เช่น พูดภาษาอังกฤษได้คล่อง, ใช้ Adobe Photoshop ได้ดี"></textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label for="experience" class="form-label">ประสบการณ์ทำงาน (โปรดสรุปโดยย่อ)</label>
                        <textarea name="experience" id="experience" class="form-control" rows="5" placeholder="ระบุตำแหน่ง, บริษัท, และระยะเวลาทำงานโดยสังเขป"></textarea>
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
                    <button type="submit" name="Submit" value="SubmitApplication" class="btn btn-primary btn-lg px-5">ส่งใบสมัคร</button>
                    <button type="reset" class="btn btn-outline-secondary btn-lg px-5">ล้างข้อมูล</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>

</body>
</html>