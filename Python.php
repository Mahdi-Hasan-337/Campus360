<?php include '../includes/indexitems/header_code.php'; ?>
  <div class="container-fluid" style="margin:0; padding:0;box-sizing:border-box">
    <?php include('../includes/indexitems/nav.php') ?>

    <!-- Info Section Start -->
    <section id="infoSection" class="info p-4">
      <div class="container">
        <h1 class="python text-center  mb-5 mt-2">python</h1>
        <p id="infoCollapse">
          Python is a high-level, interpreted, and versatile programming language that has gained immense popularity for
          its simplicity, readability, and extensive ecosystem. Created by Guido van Rossum and first released in 1991,
          Python's straightforward syntax makes it an ideal choice for both beginners and experienced developers. Its
          code readability is enhanced by the use of indentation to define code blocks, promoting clean and organized
          programming practices.Python's multi-paradigm support, encompassing object-oriented, <span id="dots">...</span><span id="more">Being an interpreted language, Python doesn't require compilation before
            execution, enabling rapid development and easy debugging. As an open-source language, Python's source code
            is freely accessible, fostering an active and collaborative community that continuously improves and
            maintains the language.<br>

            Moreover, Python is cross-platform, running seamlessly on various operating systems, making it highly
            portable.One of Python's most significant advantages is its vast standard library, providing a rich
            collection of modules and packages for diverse functionalities like file I/O, regular expressions,
            networking, and more, facilitating efficient application development. Additionally, Python boasts an
            extensive ecosystem of third-party libraries and frameworks, further extending its capabilities and
            applicability across domains.<br>

            With dynamic typing, Python allows developers to forgo explicit variable type declarations, determining
            types during runtime, which enhances code flexibility. Furthermore, Python manages memory through garbage
            collection, automating memory management tasks and relieving developers from manual memory control.
          </span>
          <button class="fw-bold" onclick="myFunction()" id="myBtn">Read More</button>
        </p>
      </div>
    </section>
    <!-- Info Section End -->
    <!-- Courses Section Start -->
    <section id="courses" class=" my-3 py-5">
      <div class="container">
        <div class="row">
          <!-- Columns 1 -->
          <div class="col-12 col-sm-6 col-lg-3">
            <table class="table table-bordered">
              <thead class="fs-5 text-center">
                <tr>
                  <th>Youtube</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.youtube.com/watch?v=xjcCi6Tzfxw&list=PLgH5QX0i9K3rz5XqMsTk41_j15_6682BN">Python
                          By Anisul Islam</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.youtube.com/watch?v=7wnove7K-ZQ&list=PLu0W_9lII9agwh1XjRt242xIpHhPT2llg">Python
                          By CodeWithHarry </a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.youtube.com/watch?v=6i3EGqOBRiU&list=PLdo5W4Nhv31bZSiqiOL5ta39vSnBxpOPT">Python
                          By Jenny's Lectures CS IT</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://youtu.be/XKHEtdqhLK8">Python By Bro Code</a></li>
                    </ol>
                  </td>
                </tr>
              </tbody>
              <!-- Extra List -->
              <tbody class="courseMore" id="col1CourseMore">
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.youtube.com/watch?v=XIR20HH8mNY&list=PLxCzCOWd7aiEb4apyN1Y8mD-QuUTr3SPQ">Python
                          By Gate Smashers</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.youtube.com/watch?v=QXeEoD0pB3E&list=PLsyeobzWxl7poL9JTVyndKe62ieoN-MZ3">Python
                          By Telusko</a></li>
                    </ol>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="courseBtnOverlay">
              <button class="fw-bold" onclick="myCourseFunction('col1CourseMore')">Show More</button>
            </div>
          </div>
          <!-- Columns 2 -->
          <div class="col-12 col-sm-6 col-lg-3">
            <table class="table table table-bordered">
              <thead class="fs-5 text-center">
                <tr>
                  <th>Websites</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.javatpoint.com/python-tutorial">Javatpoint</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.w3schools.com/python/">w3schools</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.geeksforgeeks.org/python-programming-language/">geeksforgeeks</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.programiz.com/python-programming">programiz</a></li>
                    </ol>
                  </td>
                </tr>
              </tbody>
              <!-- Extra List -->
              <tbody class="courseMore" id="col2CourseMore">
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://realpython.com/run-python-scripts/">Real Python</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://wiki.python.org/moin/BeginnersGuide">Python Website Direct</a></li>
                    </ol>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="courseBtnOverlay">
              <button class="fw-bold" onclick="myCourseFunction('col2CourseMore')">Show More</button>
            </div>
          </div>
          <!-- Columns 3 -->
          <div class="col-12 col-sm-6 col-lg-3">
            <table class="table table table-bordered">
              <thead class="fs-5 text-center">
                <tr>
                  <th>Paid Courses</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.udemy.com">udemy premium course Link 1</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.udemy.com">udemy premium course Link 2</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.udemy.com">udemy premium course Link 3</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.udemy.com">udemy premium course Link 4</a></li>
                    </ol>
                  </td>
                </tr>
              </tbody>
              <!-- Extra List -->
              <tbody class="courseMore" id="col3CourseMore">
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.leadinguniversity.com">Lu Link 5</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.leadinguniversity.com">Lu Link 6</a></li>
                    </ol>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="courseBtnOverlay">
              <button class="fw-bold" onclick="myCourseFunction('col3CourseMore')">Show More</button>
            </div>
          </div>
          <!-- Columns 4 -->
          <div class="col-12 col-sm-6 col-lg-3">
            <table class="table table table-bordered">
              <thead class="fs-5 text-center">
                <tr>
                  <th class="text-uppercase">lu</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.leadinguniversity.com">Lu Link 1</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.leadinguniversity.com">Lu Link 2</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.leadinguniversity.com">Lu Link 3</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.leadinguniversity.com">Lu Link 4</a></li>
                    </ol>
                  </td>
                </tr>
              </tbody>
              <!-- Extra List -->
              <tbody class="courseMore" id="col4CourseMore">
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.leadinguniversity.com">Lu Link 5</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.leadinguniversity.com">Lu Link 6</a></li>
                    </ol>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="courseBtnOverlay">
              <button class="fw-bold" onclick="myCourseFunction('col4CourseMore')">Show More</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Courses Section End -->
  </div>
  <!-- </div> -->

  <?php include '../includes/indexitems/footer.php';?>
  <?php include '../includes/indexitems/footer_code.php';?>