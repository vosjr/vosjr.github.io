# -*- coding: utf-8 -*-
# from django.shortcuts import render
from django.views.generic import TemplateView


class IndexView(TemplateView):
    template_name = 'base.html'


class ContactView(TemplateView):
    template_name = 'contact.html'


class AttorneyView(TemplateView):
    template_name = 'attorney.html'


class PracticeAnchorView(TemplateView):
    template_name = 'practice_anchor.html'


class AboutView(TemplateView):
    template_name = 'home.html'


class JobView(TemplateView):
    template_name = 'job.html'


class PortfolioView(TemplateView):
    template_name = 'job.html'
