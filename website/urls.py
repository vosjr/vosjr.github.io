# -*- coding: utf-8 -*-
from django.conf.urls import url

from .views import (
    IndexView, ContactView, AttorneyView,
    PracticeAnchorView, AboutView, JobView,
    PortfolioView
)

urlpatterns = [
    url(r'^$', IndexView.as_view(), name='index'),
    url(r'^contato/$', ContactView.as_view(), name='contact'),
    url(r'^advogados/$', AttorneyView.as_view(), name='attorneys'),
    url(r'^quem-somos/$', AboutView.as_view(), name='about'),
    url(r'^trabalhe-conosco/$', JobView.as_view(), name='job'),
    url(r'^portfolio/$', PortfolioView.as_view(), name='portfolio'),
    url(r'^areas-de-atuacao/$', PracticeAnchorView.as_view(), name='practice_anchor'),
]
