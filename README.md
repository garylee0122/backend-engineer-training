\# Backend Engineer Training



> 這個專案是我的 30 天 Laravel + ASP.NET 後端全端訓練專案，模擬企業級專案結構與開發流程，包含 CI/CD、Docker 支援。



\---



\## 專案結構



backend-engineer-training/

│

├─ laravel/

│ └─ laravel-blog/ # Laravel 練習專案

│ ├─ app/ # Models, Controllers

│ ├─ routes/

│ ├─ storage/

│ └─ vendor/ # Composer 套件 (已忽略)

│

├─ aspnet/

│ └─ DemoAPI/ # ASP.NET Core 練習專案

│ ├─ Controllers/

│ ├─ Models/

│ ├─ Services/

│ ├─ bin/ # 編譯輸出 (已忽略)

│ └─ obj/ # 中間編譯檔 (已忽略)

│

├─ docker/ # Docker 支援 (未來)

├─ cicd/ # Jenkins / GitHub Actions 設定

├─ .gitignore

└─ .gitattributes



\---



\## 技術棧



\- \*\*Laravel\*\* (PHP 8+)

\- \*\*ASP.NET Core\*\* (C# .NET 8+)

\- \*\*Composer / NuGet\*\* 套件管理

\- \*\*Docker / CI/CD\*\* (Jenkins / GitHub Actions)

\- \*\*Node.js / NPM\*\* (前端資源管理)

\- \*\*Git / GitHub\*\* (版本控制)



\---



\## 使用說明



\### Laravel 專案



1\. 進入專案目錄：

cd laravel/laravel-blog



2. 安裝套件：

composer install



3. 啟動開發伺服器：

php artisan serve





\### ASP.NET 專案



1. 進入專案目錄：

cd aspnet/DemoAPI



2\.    安裝套件：

dotnet build

dotnet run



3. API 會在 https://localhost:5183 運行





\### GitHub 注意事項



1. .gitignore 已忽略 Laravel 的 vendor/、node\_modules/、build 檔案
2. ASP.NET 的 bin/、obj/、.vs/ 也被忽略
3. commit diff 已設定在 .gitattributes，方便追蹤修改





專案目標



1. 逐日練習 Laravel 與 ASP.NET 基礎到進階功能
2. 模擬企業專案結構與 commit 歷史
3. 練習 CI/CD 流程與 Docker 容器化
4. 建立一個完整、乾淨、可展示的 GitHub 專案



