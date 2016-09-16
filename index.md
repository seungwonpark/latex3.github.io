---
layout: home
menu: Home
title: 경기과학고 텍 사용자협회
description: "LaTeX is a high-quality typesetting system; it includes features designed for the production of technical and scientific documentation."
---

<div class="row">
  <div class="col cell1of2">
    <h1>LaTeX[레이텍] – 문서 작성 시스템</h1>
    <dl>
      <dt><a href="{{ "/개요/" | prepend: site.baseurl }}">개요</a></dt>
      <dd>LaTeX은 과학/기술 분야 문서의 제작을 위한 기능들을 포함하는 표준적인 고급 문서 작성 시스템입니다.</dd>
      <dt><a href="{{ "/설치/" | prepend: site.baseurl }}">LaTeX 설치하기</a></dt>
      <dd>Learn how and where to get LaTeX for Linux, Mac OS X, Windows and Online.</dd>
      <dt><a href="http://texstudio.org">LaTeX 에디터 - TeXstudio</a></dt>
      <dd>TeXstudio는 지구상에서 가장 편리하고 강력한 TeX 문서 편집기입니다.</dd>
      <dt><a href="{{ "/도움/" | prepend: site.baseurl }}">도움받기</a></dt>
      <dd>Help for issues with TeX and LaTeX: Official documentation, books, and links.</dd>
    </dl>
  </div>
  <div class="col cell1of2 news">
    <h1>경기과학고 텍 사용자협회</h1>
    이 사이트를 통해서 교내 R&E 보고서 및 졸업논문 양식, 텍 입문서, 에시 코드 등을 <a href="{{ "/다운로드/" | prepend: site.baseurl }}">다운</a>받을 수 있습니다.
    <br>
    <small><a href="{{ "/참여/" | prepend: site.baseurl }}">자세히 알아보기</a></small>
    <hr>
    <h2>최신 소식</h2>
    <ul class="news-posts">
      {% for post in site.posts offset: 0 limit: 3 %}
      <li><span class="post-date">{{ post.date | date: "%b %-d, %Y" }}</span><a class="post-link" href="{{ post.url | prepend: site.baseurl }}">{{ post.title }}</a></li>
      {% endfor %}
    </ul>
    <small><a href="{{ "/news/" | prepend: site.baseurl }}">모두 보기</a></small>
  </div>
</div>
<hr>
<div class="row teaser">
  <section class="col cell1of3">{% include teaser.books.html %}</section>
  <section class="col cell1of3">{% include teaser.documentation.html %}</section>
  <section class="col cell1of3">{% include teaser.team.html %}</section>
</div>
