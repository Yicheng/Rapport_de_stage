#
#
# version 0.00
# Nécéssite la totalité du /trunk du svn pour fonctionner.
#
#

##################
#	VARS
#

include makevars

# TARGET (s)
# SUBDIRS avec makefile a executer avant!
# CLSPATH (/trunk/Ressources/Document/cls)
# POSTMAKE
# POSTCLEANALL


##################
# make section
#

all: subdirsall | $(TARGET)
	$(POSTMAKE)

subdirsall:
	for dir in $(SUBDIRS); do\
		make -C $$dir all;\
	done

.SUFFIXES : 	.pdf\
		.eps\
		.tex\
		.fig\
		.dia\
		.svg
			
.svg.pdf:
	inkscape -z --export-pdf=$*.pdf $*.svg

.eps.pdf:
	epstopdf $*.eps
	
.fig.pdf:
	fig2dev -L pdf $*.fig $*.pdf
	
.dia.eps:
	dia --export=$*.eps --filter=eps-pango $*.dia
	
.tex.pdf:
	TEXINPUTS=$$TEXINPUTS:$(CLSPATH);\
	export TEXINPUTS;\
	pdflatex $*.tex;\
	pdflatex $*.tex;
	
##################
#	Clean section
#

cleanall: clean subdirscleanall
	rm -f *.pdf;\
	rm -f $(TARGET);\
	$(POSTCLEANALL)

subdirscleanall:
	for dir in $(SUBDIRS); do\
		make -C $$dir cleanall;\
	done
	
clean: subdirsclean
	rm -f *.aux
	rm -f *.cb
	rm -f *.cb2
	rm -f *.log
	rm -f *.out
	rm -f *.toc
	rm -f *.snm
	rm -f *.nav
	rm -f *~
	rm -f *.backup

subdirsclean:
	for dir in $(SUBDIRS); do\
		make -C $$dir clean;\
	done

#version : all
#	mv PICulture_Q_PGC.pdf sauvegarde/PICulture_Q_PGC_v$$(cat ./PICulture_Q_PGC.tex | grep "version" | head -n 1 | sed -n "s/.*version{//p" | sed -n "s/}//p").pdf

 #god  command
god: cleanall all
