<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/vegas.min.css" />

        <title>お問い合わせ</title>
        
        <style>
            body {
                color: white;
            }
            
            .container {
                margin-top: 50px;
            }
            
            .navbar {
                opacity: 0.5;
                border-bottom: 1px solid rgba(255, 255, 255, 0.3);
                box-shadow: 0 5px 5px rgba(243, 236, 236);
            }
            
            .navbar-toggler {
                background-color: #313437;
            }
            
            .form-control {
                opacity: 0.5;
                color: #007BFF;
            }
        </style>
    </head>
    <body id="contact">
        <header>
          <nav class="navbar navbar-expand-sm" style="background-color: #ffeda3;">
              <a href="complete.html" class="navbar-brand"></a>
              
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse justify-content-end" id="nav-bar">
                  <ul class="navbar-nav">
                      <li class="nav-item"><a href="index.html" class="nav-link">HOME</a></li>
                      <li class="nav-item"><a href="about.html" class="nav-link">ABOUT</a></li>
                      <li class="nav-item"><a href="works.html" class="nav-link">WORKS</a></li>
                  </ul>
              </div>
          </nav>
        </header>
        <div class="container">
            <h1 class="mt-4 pb-4 border-bottom">CONTACT</h1>
            
           
            <div class="mt-4 row">
                <div class="col-md-2">
                    <strong><i class="far fa-envelope"></i>メール：</strong>
                </div>
                <div class="col-md-10">
                    <p>
                        翌営業日までに返信いたします。 <br />
                        もし返信がない場合は 迷惑メールフォルダをご確認ください。
                    </p>
                    <form action="complete.php" method="POST">
                        <div class="row form-group">
                            <label class="col-md-2 col-form-label">氏名：</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="name" placeholder="例）経塚 翼"　required>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <label class="col-md-2 col-form-label">メール：</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="mail" placeholder="例）tsubasa.kyoduka@docomo.com" required>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <label class="col-md-2 col-form-label">電話番号：</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="tel" placeholder="例）0312345678" required>
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <label class="col-md-2 col-form-label">内容：</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="content" placeholder="具体的にお書きください" required></textarea>
                            </div>
                        </div>
                        
                        
                        <div class="row form-group">
                            <div class="offset-md-2 col-md-10">
                                <button type="submit" class="form-control btn br-blank" style="background-color: #ffeda3;">お問い合わせ内容を送信する</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
        <footer class="text-center pt-3 pb-3 border-top">
            &copy; tubasa.kyoduka
        </footer>
        </div>
        
    </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> 
        <script script type="text/javascript" src="js/vegas.min.js"></script>
        <script script type="text/javascript" src="js/contact.js"></script>
    </body>