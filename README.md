# Laravel 11 透過 OpenAI 應用程式介面的速度驚人應用程式介面用戶端

引入 openai-php 的 client 套件來擴增透過 OpenAI 應用程式介面（API）的速度驚人應用程式介面用戶端，透過開放應用程式介面用戶端來存取模型，使得更多開發人員能夠以創新的方法，將人工智慧應用在大量應用程式和開放問題上。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/opne-ai/create-image/` 來進行圖片產生。

----

## 畫面截圖
![](https://i.imgur.com/rVopnu2.png)
> 只要透過一段描述文字便能叫人工智慧幫你產生圖片
