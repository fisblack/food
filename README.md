<a href="https://www.adiwit.co.th"><img src="http://www.adiwit.co.th/wp-content/uploads/logo.png" alt="Logo" width="80px"></a>

เราใช้ Docker เพื่อจำลองสภาพแวดล้อมเซิร์ฟเวอร์ให้กับคุณ ดังนั้นคุณจึงมั่นใจได้ว่าไฟล์บนเซิร์ฟเวอร์จะแสดงผลเหมือนกับเครื่องของคุณอย่างแน่นอน

- Docker CE [ดาวน์โหลด](https://www.docker.com/community-edition#/download).

## การใช้งาน Docker Container เบื้องต้น
เข้าไปยังโฟลเดอร์ที่เก็บโค๊ดโปรแกรมของคุณผ่าน `Shell`, `Terminal`, `Command Prompt` หรือ `Windows Power Shell`
- เปิดเซิร์ฟเวอร์จำลอง ใช้คำสั่ง `docker-compose up`
- ปิดเซิร์ฟเวอร์จำลอง โดยกดปุ่ม `Ctrl + C` (หรือ `Cmd + c` หากคุณทำงานบน macOS)
- ทำลายเซิร์ฟเวอร์จำลอง ใช้คำสั่ง `docker-compose down`
- ดูรายการเซิร์ฟเวอร์จำลองที่เปิดค้างอยู่ ใช้คำสั่ง `docker ps -a` โดยใช้ Shell / Terminal / PowerShell หน้าต่างใหม่
- ดู LOG ของเซิร์ฟเวอร์จำลอง ใช้คำสั่ง `docker logs <container_name>`

เปิดดูงานผ่าน browser ที่ URL (http://localhost) ข้อมูลเพิ่มเติมและวิธีใช้งาน Docker [คลิ๊ก](https://docs.docker.com/get-started)

# วิธีเรียกใช้ JavaScript package เช่น jQuery, SweetAlert, Toastr, Calendar ฯลฯ

ทำเป็น `npm install` เข้ามาผ่าน `package.json` แล้วเพิ่มใน `webpack.mix.js` ให้ `copyDirectory` ไปใว้ที่ public หลังจากนั้นใน blade ให้ `<script src>` กับ `<link href>` เข้ามา ใช้ `npm หรือ yarn ก็ได้ ไม่บังคับ`
สั่งผ่าน docker เปิด terminal ใหม่ แล้ว`docker exec -it node npm install sweet-alert` เป็นต้น

# คำแนะนำในการทำงาน การตั้งชื่อไฟล์ และการวางไฟล์ให้ถูกต้องตามโฟลเดอร์

- สำหรับ FrontEnd Developer [คลิ๊ก](FrontEndReadMe.md)
- สำหรับ BackEnd Developer [คลิ๊ก](BackEndReadMe.md)

# การตั้ง Routes/web.php 
- เเบบมี  Sub module ต้องมี  backOffice อยู่ ด้านบนเเล้วตามด้วย Sub module และให้`มีเเค่ 2 บรรทัด มี Resource กับ  Match` ใน Match ต้อง `['put', 'patch']`
- ให้ดูเรื่อง indent หรือ Tab ตามมาตรฐาน  `PSR-2`รายละเอียเพิ่มเติม [คลิ๊ก](http://www.php-fig.org/psr/ps)

```
Route::get('/', function() { return redirect()->route('backOffice.ชื่อซับกรุ๊ป.ชื่อโมดูล.index'); }); 

Route::group(['prefix' => 'back-office', 'as' => 'backOffice.'], function () { 
    Route::group(['prefix' => 'ชื่อซับกรุ๊ป', 'as' => 'ชื่อซับกรุ๊ป.'], function () { 
        Route::resource('ชื่อโมดูล', 'BackOffice\ชื่อโมดูลพิมใหญ่ตัวเเรกController'); 
        Route::match(['put', 'patch'], 'ชื่อโมดูล/{id}/restore', ['as' => 'ชื่อโมดูล.restore', 'uses' => 'BackOffice\ชื่อโมดูลพิมใหญ่ตัวเเรกController@restore']); 

    }); 
});
```
# การวางไฟล์
บริษัทฯเชื่อว่าซอฟต์แวร์คุณภาพเริ่มต้นจากโค๊ดที่เขียนขึ้นตามฟอร์แม่ทมาตรฐานสากล บริษัทฯใช้ GitLab ในการทำ Automated Testing เบื้องต้นในการลดภาระของ Software Tester ของบริษัทฯ และเป็นการช่วย Developer ในการตรวจสอบผลลัพธ์ก่อนส่งมอบงานได้แบบ Real Time โดยเข้าไปที่ `https://<project_name>.durian.software`

# ก่อน Push งานขึ้น GitLab หรือส่งงาน อย่าลืม!!!
 - ลบไฟล์ที่เป็น example (Controller, Request, Unit test) ออกให้หมด
 - ลบ migration ที่ไม่เกี่ยวข้องกับ module ที่ตนเองทำงานออกให้หมด

# วิธีส่งงาน
- 1. ให้ทำการ Push ตัว SoureCode เข้ามาที่ Master โดยตรงพร้อมระบุ Topic หรือ Issue ที่ทำการแก้ไข
- 2. Push ขึ้นไปที่ Branch ของตัวเองแล้วค่อย Merge เข้าที่ Master เพื่อเก็บ Source Code ในแต่ละ Version ที่แก้เอาไว้ด้วย
 
# วิธีการแก้ปัญหาเบื้องต้น

1. reset docker โดยการลบ & ทำลายเซิร์ฟเวอร์จำลอง

`docker stop $(docker ps –qa)`
`docker rm -rf $(docker ps –qa)`
`docker ps -a`

- ลบไฟล์และโฟลเดอร์ที่เกี่ยวข้อง node_modules, vendor, .env รวมไปถึง storage/database

- restart เครื่องฯ แล้ว `docker-compose up` อีกครั้ง

2. Deploy Error - PSR-2 
    
- รายละเอียเพิ่มเติม [คลิ๊ก](http://www.php-fig.org/psr/psr-2/)

บริษัทยึดมาตรฐาน PSR-2 ในการทำงาน และตรวจรับงานผ่านกระบวนการ CI/CD โดยใช้ใช้ PHP CodeSniffer ในการตรวจสอบคุณภาพ Code ในขั้นตอนการ Test ซึ่ง Developer สามารถตรวจสอบคุณภาพ Code ได้เองด้วยเครื่องมือเดียวกันนี้ใน Docker โดยใช้คำสั่ง :
```
docker exec -it php7 php vendor/bin/phpcs --standard=PSR2 app database tests
```

นอกจากนั้น Developer ยังสามารถให้ PHP CodeSniffer ซ่อม code ให้เบื้องต้นให้โดยอัตโนมัติได้อีกด้วยเพียงใช้คำสั่ง
```
docker exec -it php7 php vendor/bin/phpcbf --standard=PSR2 app database tests
```

3. Deploy Failed
    - ให้ลองกดเข้าไปที่ Issue นั้น ๆ แล้วกด Retry ก่อนสัก 1 ครั้ง เพราะบางทีเกิดจากการที่ Deploy นานเกินไปแล้ว Time out 
