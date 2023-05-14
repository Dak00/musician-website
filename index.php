<!-- собрание комментариев (умеющих пиздеть) -->
<!-- для nav a оставлен еще вариант hover: линия под ссылкой -->
<!-- добавлена анимация точки или линий -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Cookie&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Satisfy&display=swap"
      rel="stylesheet"
    />

    <!-- global css -->
    <link rel="stylesheet" type="text/css" href="fonts.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <!-- MAKE IT DONE _ минимальная задежка перед адресацией и окно принятия данных
    <div class="login">
      <button class="hide-login"></button>
      <div class="login-blur"></div>
      <div class="login-content">
        <h1>Доступ только для администраторов / редакторов</h1>
        <form action="" class="login-form">
          <label for="" place>Имя пользователя: </label>
          <input type="text" placeholder="" />

          <label for="">Пароль: </label>
          <input type="text" />

          <input type="submit" value="Войти в аккаунт" />
        </form>

        <p>
          Если забыли пароль, обратитесь к
          <a href="#" class="login-link">администраторам</a>
        </p>
      </div>
    </div> -->

    <header id="header">
      <div class="bg"></div>

      <div class="container">
        <div id="header" class="content">
          <nav class="nav">
            <a href="#" class="link">О нас</a>
            <a href="#" class="link">Мероприятия</a>
            <a href="#" class="link">
              <div class="logo">
                <img src="src\img\logo.png" width="100%" />
              </div>
            </a>
            <a href="#" class="link">Галерея</a>
            <a href="#" class="link">Отправка демо</a>

            <!-- <button class="show-login" onclick="showLogin()">Войти</button> -->
          </nav>

          <div class="title">
            <div class="content">
              <div class="bg"></div>
              <div class="bg-blur"></div>

              <h1>Atyrau Music Community</h1>
              <span class=""></span>
            </div>
          </div>

          <div class="bottom">
            <div class="social-media">
              <a href="#" title="spotify"
                ><img src="src\img\spotify.svg" alt="spotify"
              /></a>
              <a href="#" title="soundcloud"
                ><img src="src\img\soundcloud.svg" alt="soundcloud"
              /></a>
              <a href="#" title="telegram"
                ><img src="src\img\telegram.svg" alt="telegram"
              /></a>
              <a href="#" title="instagram"
                ><img src="src\img\instagram.svg" alt="instagram"
              /></a>
            </div>

            <div class="rights">
              <p><span>AMC</span> © 2023 ВСЕ ПРАВА ЗАЩИЩЕНЫ</p>
            </div>
          </div>
        </div>
      </div>
      <div class="animaline">
        <div class="dot"></div>
      </div>
    </header>

    <section id="section">
      <div class="about-us">
        <div class="container">
          <h1 class="section-title">О нас</h1>

          <div class="content">
            <h2>who we are?</h2>
            <p>
              AMC - место, где любители музыки нашего города могут собраться
              вместе и поделиться своим творчеством, идеями и опытом. Мы создали
              это сообщество для того, чтобы объединить всех, кто увлечен
              музыкой - от начинающих музыкантов до профессионалов. Здесь вы
              сможете общаться с другими музыкантами, получать обратную связь на
              свое творчество, а также найти вдохновение для новых проектов. Мы
              верим, что музыка может объединить людей, и наша цель - создать
              площадку для того, чтобы каждый мог найти свое место в музыкальном
              мире. Присоединяйтесь к нашему сообществу и вместе мы создадим
              музыку, которая вдохновит мир!
            </p>
          </div>
        </div>
      </div>

      <div class="events">
        <div class="container">
          <div class="events-content">
            <h1 class="section-title">Мероприятия</h1>

            <div class="flex-block">
              <div class="left">
                <div class="preview"></div>
                <div class="preview"></div>
                <div class="preview"></div>
                <div class="preview"></div>
              </div>

              <div class="right">
                <div class="main"></div>
                <div class="text">
                  <h1>21.09 Сегодня мы впервые сделали прямой эфир</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="demo">
        <div class="container">
          <div class="demo-content">
            <h1>Отправка треков на прослушивание</h1>
            <form action="" method="post" class="demo-form">
              <input
                type="text"
                name=""
                id=""
                placeholder="Имя артиста *"
                required
              />

              <input
                type="text"
                name=""
                id=""
                placeholder="Телефон для связи"
              />

              <div id="file-drop-area">
                <input type="file" id="file-input" multiple required />
                <label for="file-input"
                  >Перетащите файлы сюда или нажмите, чтобы загрузить</label
                >
              </div>

              <textarea
                name=""
                id=""
                cols="30"
                rows="10"
                placeholder="О вашем треке"
                maxlength="400"
                wrap="soft"
              ></textarea>

              <input type="submit" value="Отправить" />
            </form>
          </div>
        </div>
      </div> -->
      <div class="wrapper">
        <div class="demo">
          <h1>
            <span class="space">contact</span>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus
            cum veniam, harum reiciendis voluptatibus ipsa nemo iste eveniet
            natus, molestiae maiores impedit? Cupiditate doloremque tempore
            eveniet quisquam harum repellendus! Accusamus.
          </h1>

          <div class="demo-content">
            <form action="upload.php" method="post" class="demo-form" enctype= multipart/form-data>
              
              <?php if(isset($_GET['error'])){?>
                    <p><?=$_GET['error']?></p>
                  <?php
                  }
                  ?>

              <input type="text" name="nick" id="" placeholder="Псевдоним" required> 
              <div id="file-drop-area">
                <input type="file" name="my_audio" id="file-input" multiple required />
                <label for="file-input"
                  >перетащите файлы сюда или нажмите, чтобы загрузить</label
                >
              </div>
              <input type="submit" name="submit" value="отправить" class="submit" />
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer>
      <div class="container">
        <div class="footer-border"></div>

        <div class="footer-content">
          <div class="email">
            <a href="http://" style="display: block"
              >info@atyraumusiccommunity.com</a
            >
          </div>
          <div class="logo">ATYRAU MUSIC COMMUNITY</div>
          <div class="social-media">
            <div class="item">
              <a href=""><img src="src/img/spotify.png" alt="spotify" /></a>
            </div>
            <div class="item">
              <a href=""><img src="src/img/telegram.svg" alt="telegram" /></a>
            </div>
            <div class="item">
              <a href=""><img src="src/img/instagram.svg" alt="instagram" /></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="src/js/script.js"></script>
  </body>
</html>
