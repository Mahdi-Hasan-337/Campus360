<?php include 'includes/indexitems/header_code.php';?>
  <div class="container-fluid" style="margin:0;padding:0;box-sizing:border-box">
    <?php include('includes/indexitems/nav.php') ?>

    <!-- Info Section Start -->
    <section id="infoSection" class="info p-4">
      <div class="container">
        <h1 class="c text-center  mb-5 mt-2">HTML</h1>
        <p id="infoCollapse">
          HTML (Hypertext Markup Language) stands as the backbone of the modern web, providing the structural foundation
          upon
          which the digital landscape is built. Developed in the early 1990s by Tim Berners-Lee, HTML has become the
          fundamental
          language for creating and structuring content on the World Wide Web. It serves as the cornerstone of web
          development,
          allowing developers to craft interactive and visually appealing experiences that are accessible to a global
          audience.

          <br>At its core, HTML is a markup language that uses a system of tags to define the structure and elements of
          a
          web page.
          These tags encapsulate content such as headings, paragraphs, images, links, and more, enabling browsers to
          interpret and
          display web content to users. <span id="dots">...</span><span id="more"> ___This semantic structure is crucial
            for ensuring that web pages are not only visually appealing but also organized in a
            logical and accessible manner, making them comprehensible for both humans and machines.

            <br>HTML's simplicity has been key to its widespread adoption and enduring relevance. Its intuitive syntax
            makes
            it
            accessible to beginners, yet it possesses the flexibility to handle complex web applications and multimedia
            content.
            HTML serves as the backbone upon which other technologies like CSS (Cascading Style Sheets) and JavaScript
            build,
            enhancing the visual appeal and interactivity of web pages.

            The role of HTML extends beyond static content presentation. It forms the cornerstone of a larger ecosystem
            that
            includes web development frameworks, content management systems, and responsive design principles. With the
            advent of
            HTML5, the language underwent a significant evolution, introducing new elements and APIs that enable the
            creation of
            multimedia-rich and interactive web experiences without the need for third-party plugins.

            <br><br>One of the standout features of HTML is its emphasis on accessibility. Web developers are encouraged
            to
            structure
            content in a way that ensures equal access for users with disabilities. Semantic HTML tags like nav,
            header, and
            main aid in creating web content that can be effectively interpreted by screen readers and assistive
            technologies,
            making the internet more inclusive and ensuring that everyone can benefit from the digital realm.

            As the internet continues to evolve, HTML remains at the forefront of innovation. The rise of
            responsive web
            design, which adapts content to various screen sizes and devices, underscores the importance of HTML
            in creating
            adaptable and user-friendly interfaces. Modern HTML features such as responsive images, video
            embedding, and
            geolocation APIs facilitate the development of versatile and engaging web applications that cater to a
            diverse
            audience.

            While HTML has flourished in the digital era, it is not without its challenges. Browser compatibility
            can be a
            concern, as different browsers may interpret HTML elements and features differently. Moreover, the
            increasing
            complexity of web applications has led to the integration of additional technologies like CSS and
            JavaScript,
            necessitating a holistic understanding of the web development stack.

            <br><br>In conclusion, HTML programming represents the foundation of the internet, providing the essential
            building blocks
            for creating captivating, informative, and interactive web experiences. Its simplicity, accessibility,
            and
            adaptability have contributed to its enduring relevance, allowing both novice and seasoned developers
            to shape the
            online world. As the digital landscape continues to evolve, HTML remains an indispensable tool for
            crafting web
            content that not only informs and entertains but also connects individuals across the globe. With its
            ongoing
            evolution and integration with modern technologies, HTML remains a testament to the power of human
            innovation in
            the digital age.
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
                      <li><a href="https://www.youtube.com/watch?v=6Dl_gkr0Lmw&list=PLgH5QX0i9K3pCMBZcul1fta6UivHDbXvz&index=2">C
                          By Anisul Islam</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.youtube.com/watch?v=7Dh73z3icd8&list=PLu0W_9lII9aiXlHcLx-mDH1Qul38wD3aR">C
                          By CodeWithHarry </a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.youtube.com/watch?v=EjavYOFoJJ0&list=PLdo5W4Nhv31a8UcMN9-35ghv8qyFWD9_S">C
                          By Jenny's Lectures CS IT</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.youtube.com/watch?v=87SH2Cn0s9A">C By Bro Code</a></li>
                    </ol>
                  </td>
                </tr>
              </tbody>
              <!-- Extra List -->
              <tbody class="courseMore" id="col1CourseMore">
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.youtube.com/watch?v=ec-Cd4jKFWc&list=PLxCzCOWd7aiGmiGl_DOuRMJYG8tOVuapB">C
                          By Gate Smashers</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.youtube.com/watch?v=yNVnjI8p3NQ&list=PLz5bRBZ3z0DSDRh0ANkkglf6nkCpkpsZN">C
                          By প্রোগ্রামিং ইশকুল</a></li>
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
                      <li><a href="https://www.javatpoint.com/what-is-an-instance-in-java">C by Javatpoint</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.w3schools.com/cpp/default.asp">C by w3schools</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.geeksforgeeks.org/c-programming-language/">C by geeksforgeeks</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://programiz.pro/learn/master-c-programming?utm_source=sidebar-navigation&utm_campaign=programiz&utm_medium=referral">C
                          by programiz</a></li>
                    </ol>
                  </td>
                </tr>
              </tbody>
              <!-- Extra List -->
              <tbody class="courseMore" id="col2CourseMore">
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.codecademy.com/learn/paths/c">C by Code Academy</a></li>
                    </ol>
                  </td>
                </tr>
                <tr>
                  <td class="py-3">
                    <ol>
                      <li><a href="https://www.coursera.org/specializations/c-programming">C by Coursera</a></li>
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
  </div>
  <?php include 'includes/indexitems/footer_code.php';?>