# Generated by Django 2.0 on 2018-03-21 17:31

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('core', '0021_compiler_highlightjs'),
    ]

    operations = [
        migrations.AlterModelOptions(
            name='compiler',
            options={'ordering': ['name']},
        ),
    ]
