from django.shortcuts import render
from django.http import HttpResponse

def home(request):
    return render(request, 'home.html', {'usuario': 'Test'})

def escritorio(request):
    return render(request,'escritorio.html')
