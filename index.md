---
layout: home
menu: Home
title: 경기과학고 텍 사용자협회
description: "LaTeX is a high-quality typesetting system; it includes features designed for the production of technical and scientific documentation."
---

<div class="row">
  <div class="col cell1of2">
    <h1>LaTeX[레이텍] – 문서 작성 시스템</h1>
    LaTeX은 과학/기술 분야 문서의 제작을 위한 기능들을 포함하는 고급의 문서 작성 시스템입니다. LaTeX은 <a href="{{ "/lppl/" | prepend: site.baseurl }}">프리웨어</a>이며, 과학 분야 문서 작성의 표준으로 인정되고 있습니다.
    
    이 사이트는 경기과학고 내에서의 텍 사용을 편리하게 하기 위해 만들었습니다.
    이 사이트를 통해서 교내 R&E, 졸업논문 등의 양식을 <a href="{{ "/download/" | prepend: site.baseurl }}">다운</a>받을 수 있으며,
    양식 사용 중 발생하는 어려움에 관해 질문할 수 있습니다.
    
  </div>
  <div class="col cell1of2 news">
    <h2>최신 소식</h2>
    <ul class="news-posts">
      {% for post in site.posts offset: 0 limit: 2 %}
      <li><span class="post-date">{{ post.date | date: "%b %-d, %Y" }}</span><a class="post-link" href="{{ post.url | prepend: site.baseurl }}">{{ post.title }}</a></li>
      {% endfor %}
    </ul>
    <small><a href="{{ "/news/" | prepend: site.baseurl }}">모두 보기</a></small>
  </div>
</div>
<hr>
<div class="row">
  <div class="col cell1of2">
    <h2>LaTeX 시작하기</h2>
    <dl>
      <dt><a href="{{ "/about/" | prepend: site.baseurl }}">개요</a></dt>
      <dd>LaTeX에 관한 개요입니다. LaTeX과 그의 기능에 대해 알아보세요.</dd>
      <dt><a href="{{ "/get/" | prepend: site.baseurl }}">LaTeX 설치하기</a></dt>
      <dd>Learn how and where to get LaTeX for Linux, Mac OS X, Windows and Online.</dd>
      <dt><a href="http://texstudio.org">LaTeX 에디터 - TeXstudio</a></dt>
      <dd>TeXstudio는 지구상에서 가장 편리하고 강력한 TeX 문서 편집기입니다.</dd>
      <dt><a href="{{ "/help/" | prepend: site.baseurl }}">도움받기</a></dt>
      <dd>Help for issues with TeX and LaTeX: Official documentation, books, and links.</dd>
    </dl>
  </div>
  <div class="col cell1of2">
    <h2>경기과학고 텍 사용자협회</h2>
    <dl>
      <dt><a href="{{ "/latex3/" | prepend: site.baseurl }}">LaTeX3 Project</a></dt>
      <dd>The LaTeX3 project is a long-term research project to develop the next version of the LaTeX typesetting system.</dd>
      <dt><a href="{{ "/publications/" | prepend: site.baseurl }}">Publications</a></dt>
      <dd>A selection of articles, slides, conference papers, videos etc. published by the LaTeX3 project.</dd>
      <dt><a href="{{ "/latex3/code/" | prepend: site.baseurl }}">Development Code</a></dt>
      <dd>Place to get LaTeX3 development code which is intended only for experimentation and comments.</dd>
      <dt><a href="https://www.tug.org/donate.html">Donations</a></dt>
      <dd>Please consider donating to the TeX Users Group to support LaTeX development (LaTeX Project contribution).</dd>
    </dl>
  </div>
</div>
<hr>
<div class="row teaser">
  <section class="col cell1of3">{% include teaser.books.html %}</section>
  <section class="col cell1of3">{% include teaser.documentation.html %}</section>
  <section class="col cell1of3">{% include teaser.team.html %}</section>
</div>
