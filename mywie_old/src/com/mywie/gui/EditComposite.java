package com.mywie.gui;

import org.eclipse.swt.SWT;
import org.eclipse.swt.graphics.Font;
import org.eclipse.swt.graphics.Rectangle;
import org.eclipse.swt.widgets.Button;
import org.eclipse.swt.widgets.Composite;
import org.eclipse.swt.widgets.Display;
import org.eclipse.swt.widgets.FileDialog;
import org.eclipse.swt.widgets.Label;
import org.eclipse.swt.widgets.Shell;
import org.eclipse.swt.widgets.Text;

import com.mywie.gui.impl.CompositeImpl;

public class EditComposite extends CompositeImpl {
	private Label label = null;
	private Text templateFilePath = null;
	private Button openFile = null;
	private Button start = null;
	private Shell subShell;

	public EditComposite(Composite parent, int style) {
		super(parent, style);
		initialize();
	}

	private void initialize() {
		title = new Label(this, SWT.NONE);
		title.setBounds(new Rectangle(200, 35, 110, 35));
		title.setFont(new Font(Display.getDefault(),
				"\u5fae\u8f6f\u96c5\u9ed1", 18, SWT.NORMAL));
		title.setText("编辑模板");

		label = new Label(this, SWT.NONE);
		label.setBounds(new Rectangle(20, 100, 70, 25));
		label.setText("模板文件");

		templateFilePath = new Text(this, SWT.BORDER);
		templateFilePath.setBounds(new Rectangle(100, 100, 300, 25));

		openFile = new Button(this, SWT.NONE);
		openFile.setBounds(new Rectangle(410, 100, 80, 25));
		openFile.setText("选择");
		openFile
				.addSelectionListener(new org.eclipse.swt.events.SelectionAdapter() {
					public void widgetSelected(
							org.eclipse.swt.events.SelectionEvent e) {
						FileDialog fd = new FileDialog(getShell());
						String[] filterExtensions = { "模板文件 (*.html;*.htm"};
						fd.setFilterExtensions(filterExtensions);
						fd.setText("选择模板文件");
						String url = fd.open();
						if (url != null)
							templateFilePath.setText(url);
					}
				});

		start = new Button(this, SWT.NONE);
		start.setBounds(new Rectangle(200, 180, 110, 50));
		start.setText("编  辑");
		start.addSelectionListener(new org.eclipse.swt.events.SelectionAdapter() {
					public void widgetSelected(
							org.eclipse.swt.events.SelectionEvent e) {
						if ("".endsWith(templateFilePath.getText().trim())) {
							messageBox.setMessage("请先选择一个模板文件");
							messageBox.open();
						} else {
							try {
								showEditTemplate(templateFilePath.getText());
							} catch (Exception e1) {
								e1.printStackTrace();
							}
						}
					}
				});
	}

	private void showEditTemplate(String url) {
		subShell = new Shell(getDisplay());
		subShell.setText("模板编辑器");
		EditTemplate editTemplate = new EditTemplate(subShell, SWT.NONE);
		System.out.println(url);
		editTemplate.setUrl(url);
		subShell.pack();
		subShell.open();
	}
}
