# alsonchi_api
alsonchi home work

首先感謝貴公司願意提供給我面試的機會，我也非常珍惜任何一個機會

我是使用LARAVEL8開發API
PHP 版本 7.4

一般開發LARAVEL專案會將程式碼才分為以下部分
Route路由
Controller處理請求驗證&回傳結果
Services處理商業邏輯
Repositories處理資料庫

我將blocks.json裡面的資料放在Repository模擬資料庫
由於時間的問題，我並未使用Swagger套件開發
根據你們提供的block.json資料和圖片
我發現block.json（datetime_from & datetime_to）的時間是無法和圖片上的時間表相符
應為block.json（datetime_from & datetime_to）有加上-去的時間
所以在判斷該時間是否可使用並且與時間表相符，我只取前19的字串（exp：2021-11-29T11:00:00）
另外我發現有兩項請求是不同的时区偏移
所以我在api加上（timezone）來判斷請求是否是不同的时区偏移
0=當前時區
1=不同的时区偏移

當timezone為1時我會將日期直接轉換格式（exp：2021-11-30T11:00:00-06:00）
date('Y-m-d\TH:i:s', strtotime(2021-11-30T11:00:00-06:00)) 
轉換結果為 2021-11-30T05:00:00

我有發現你們在設計題目上有話一些心思，讓開發變得有趣 =D
感謝你們

First of all, thank you for your company's willingness to provide me with the opportunity to interview. I also cherish any opportunity very much.

I am using LARAVEL8 to develop API
PHP version 7.4

Generally, the development of LARAVEL projects will divide the code into the following parts
Route
Controller handles request verification & returns results
Services handle business logic
Repositories handle repository data

I put the data in blocks.json in the Repository simulation database
Due to time issues, I did not use the Swagger suite to develop
According to the block.json data and pictures you provided
I found that the time of block.json (datetime_from & datetime_to) cannot match the timetable on the picture
Should be block.json (datetime_from & datetime_to) with add-to time
So when judging whether the time is available and consistent with the timetable, I only take the first 19 strings (exp: 2021-11-29T11:00:00)
Also I found that there are two requests with different timezone offsets
So I add (timezone) to the api to determine if the request is a different timezone offset
0=current time zone
1 = different time zone offset

When timezone is 1 I will convert date directly to format (exp: 2021-11-30T11:00:00-06:00)
date('Y-m-d\TH:i:s', strtotime(2021-11-30T11:00:00-06:00))
The conversion result is 2021-11-30T05:00:00

I found that you have some thoughts on the design topic to make development interesting =D
thank you
